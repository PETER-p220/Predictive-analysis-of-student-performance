<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class LoginController extends Controller
{
    // Handle login logic
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email','password');

        // Attempt to log the user in with the provided credentials
        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to the intended page
            return redirect()->intended('homepage');
        }

        // If authentication fails, return to the login page with an error
        dd('User not found');
    }

    // Handle user logout
    public function logout()
    {
        Auth::logout();

        // Redirect to the homepage after logout
        return redirect()->route('homepage');
    }
    //
    public function showLoginForm()
    {
        return view('auth.login'); // Make sure you have the 'auth.login' view available.
    }


}

