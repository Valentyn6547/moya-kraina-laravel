<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades;

class ForgetPasswordManager extends Controller
{
    function forgetPassword()
    {
        return view('resetpassword');
    }

    function forgetPasswordPost(Request $request)
    {
       $request -> validate([
        'email' => "required|email|exists:users",
       ]);

       $token = Str::random(64);

       DB::table('password_resets') -> insert([
        'email' => $request->email,
        'token' => $token,
        'created_at' => Carbon::now()
       ]);

       Mail::send("emails.forget-password", ['token' => $token], 
       function($message) use ($request){
        $message->to($request->email);
        $message->subject("Reset Password");
       });

       return redirect()->to(route("forget.password"))->with("success","We have sent an email to reset your password");
    }

    function resetPassword($token)
    {
        return view("newpassword", ['token' => $token]);
    }

    function resetPasswordPost(Reqest $request)
    {
        $request->validate([
            "email" => "required|email|exists:user",
            "password" => "required|string|min:6|confirmed",
            "password_confirmation" => "required"
        ]);

        $updatePassword = DB::table('password_resets')
        -> where([
            "email" => $request->email,
            "token" => $request->token
        ])->first();

        if (!$updatePassword) {
            return redirect()->to(route("reset.password"))->with("error", "Invalid password");
        }

        User::where("email", $request->email)->update(["password" => Hash::make($request->password)]);

        DB::table("password_resets")->where(["email" => $request->email])->delete();

        return redirect()->to(route("login"))->with("success", "Password has been updated");
    }

}
