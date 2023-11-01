<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model

class UsersController extends Controller
{
    public function ListProfile()
    {
        if (session()->has('user_email')) {
            $loggedInUserEmail = session('user_email');
            $loggedInUser = User::where('email', $loggedInUserEmail)->first();
            
            // Check if the user is an admin
            if ($loggedInUser->isAdmin) {
                $allUsers = User::all();
                return view('/admin/users', ['loggedInUser' => $loggedInUser, 'allUsers' => $allUsers]);
            } else {
                return redirect('/'); // Redirect non-admin users to the home page
            }
        } else {
            return redirect('/');
        }
    }
}