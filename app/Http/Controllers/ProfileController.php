<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model

class ProfileController extends Controller
{
    public function showProfile()
    {
        if (session()->has('user_email')) {
            $userEmail = session('user_email');
            $userData = User::where('email', $userEmail)->first();
            return view('profile', ['userData' => $userData]);
        } else {
            return redirect('/'); // Redirect to the home page or another appropriate route
        }
    }
}
