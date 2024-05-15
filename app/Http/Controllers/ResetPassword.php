<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPassword extends Controller
{
    
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