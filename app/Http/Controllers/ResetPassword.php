<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPassword extends Controller
{
    
    public function showResetForm()
    {
        return view('resetpassword');
    }

    public function reset(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'email' => 'required|email',
    
        ]);

        $status = Password::sendResetLink(
            $request -> only('email')
        );
        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', trans($status));
        }
        return back()->withInput($request->only('email'))
        ->withErrors(['email' => trans($status)]);
    }

}






    // /**
    //  * Обробка запиту на скидання пароля.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\RedirectResponse
    //  */
    // public function reset(Request $request)
    // {
    //     $request->validate(['email' => 'required|email']);

    //     $status = Password::sendResetLink(
    //         $request->only('email')
    //     );

    //     return $status == Password::RESET_LINK_SENT
    //                 ? back()->with(['status' => __($status)])
    //                 : back()->withErrors(['email' => __($status)]);
    // 