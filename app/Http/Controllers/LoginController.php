<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication was successful
            $user = Auth::user(); // Get the authenticated user
            session()->put('user_email', $user->email); // Store user email in the session
            return redirect('/profile'); // Redirect to the /profile route
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }
}
