<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ResetPasswordController extends Controller
{
    public function create(Request $request)
    {
        return view('resetpassword', ['request' => $request]);
    }

    public function showResetPasswordForm($token)
{
    return view('newpassword', ['token' => $token]);
}

public function store(Request $request)
{
    // Валідація даних форми
    $request->validate([
        'password' => 'required|string|min:8|confirmed',
        'token' => 'required|string',
    ]);

    // Отримання електронної адреси користувача з токеном
    $email = DB::table('password_resets')
                ->where('token', $request->token)
                ->value('email');

    // Зміна паролю користувача
    $user = User::where('email', $email)->first();
    $user->password = Hash::make($request->password);
    $user->save();

    // Видалення запису про токен з бази даних
    DB::table('password_resets')->where('email', $email)->delete();

    // Повернення користувача на сторінку з успішним повідомленням
    return Redirect::route('login')->with('status', 'Пароль було успішно оновлено.');
}
}