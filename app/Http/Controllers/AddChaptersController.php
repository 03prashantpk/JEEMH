<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model
use App\Models\Chapter; // Import the Chapter model
use Illuminate\Support\Facades\Validator;

class AddChaptersController extends Controller
{
    public function addChapters()
    {
        // Check if the user is logged in
        if (session()->has('user_email')) {
            $loggedInUserEmail = session('user_email');
            $loggedInUser = User::where('email', $loggedInUserEmail)->first();

            // Check if the user is an admin
            if ($loggedInUser->isAdmin) {
                // Fetch the list of chapters or any other data if needed
                $chapters = Chapter::all();
                return view('admin.addChapters', ['loggedInUser' => $loggedInUser, 'chapters' => $chapters]);
            } else {
                return redirect('/'); // Redirect non-admin users to the home page
            }
        } else {
            return redirect('/');
        }
    }

    public function submitChapters(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'chapterName' => 'required|string|max:255',
            'subject' => 'required|string',
            'price' => 'required|in:Free,Paid',
            'amount' => 'required_if:price,Paid|numeric',
            'teacherName' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'required|url',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.addChapters')
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Create a new chapter
            Chapter::create([
                'chaptername' => $request->input('chapterName'),
                'subject' => $request->input('subject'),
                'price' => $request->input('price'),
                'amount' => $request->input('price') === 'Paid' ? $request->input('amount') : 0,
                'teachername' => $request->input('teacherName'),
                'description' => $request->input('description'),
                'url' => $request->input('url'),
                'password' => $request->input('password'),
            ]);
        } catch (\Exception $e) {
            // Handle the exception
            dd($e->getMessage());
        }



        // Redirect to a success page or any other page as needed
        return redirect()->route('admin.addChapters')->with('success', 'Chapter added successfully');
    }
}
