<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RegisterSubmit extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'city' => 'required|string|max:255',
            'date' => 'required|date',
            'privacy-policy' => 'required|accepted', // Assuming this is the checkbox for privacy policy
        ]);

        // Create a new user with the validated data
        $user = new User();
        $user->name = $validatedData['first-name'];
        $user->surname = $validatedData['last-name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']); // Hash the password
        $user->city = $validatedData['city'];
        $user->date_of_birth = $validatedData['date'];
        $user->save();

        $request->session()->regenerate();


        Session::put('user_id', $user->id);
        Session::put('user_email', $user->email);
        Session::put('user_type', VOLUNTEER);
        Session::put('autorizated', true);


        // Redirect or return a response as needed
        return redirect()->route('home')->with('success', 'Registration successful!');
    }

}
