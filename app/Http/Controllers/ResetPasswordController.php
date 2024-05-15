<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class ResetPasswordController extends Controller
{

    public function showResetForm()
    {
        return view('resetpassword');
    }

    public function showResetPasswordForm($token)
    {
        return view('newpassword', ['token' => $token]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
    
        $status = Password::sendResetLink($request->only('email'));
    
        if ($status === Password::RESET_LINK_SENT) {
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => Str::random(60), // генеруємо токен
                'created_at' => now()
            ]);
        }
    
        return $status === Password::RESET_LINK_SENT
                    ? redirect()->route('password.request')->with('status', __($status))
                    : back()->withErrors(['email' => __($status)]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
            'token' => 'required|string',
        ]);
    
        // Отримання токену з поля форми
        $token = $request->token;
    
        // Зміна паролю користувача
        $user = User::where('email', DB::table('password_resets')->where('token', $token)->value('email'))->first();
        $user->password = Hash::make($request->password);
        $user->save();
    
        // Видалення запису про токен з бази даних
        DB::table('password_resets')->where('token', $token)->delete();
    
        // Повернення користувача на сторінку з успішним повідомленням
        return Redirect::route('login')->with('status', 'Пароль було успішно оновлено.');
    }
}