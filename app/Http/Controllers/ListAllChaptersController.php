<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chapter;

class ListAllChaptersController extends Controller
{
    public function listAllChapters()
    {
        return $this->getChaptersBySubject('all');
    }

    public function ListOrganic()
    {
        return $this->getChaptersBySubject('Organic Chemistry');
    }

    public function ListInOrganic()
    {
        return $this->getChaptersBySubject('Inorganic Chemistry');
    }

    public function Physics()
    {
        return $this->getChaptersBySubject('Physics');
    }

    public function Physical()
    {
        return $this->getChaptersBySubject('Physical Chemistry');
    }

    public function Maths()
    {
        return $this->getChaptersBySubject('Math');
    }

    private function getChaptersBySubject($subject)
    {
        if (session()->has('user_email')) {
            $loggedInUserEmail = session('user_email');
            $loggedInUser = User::where('email', $loggedInUserEmail)->first();

            // Check if the user is an admin
            if ($loggedInUser->isAdmin) {
                // Fetch chapters by subject
                if ($subject === 'all') {
                    $allChapters = Chapter::all();
                } else {
                    $allChapters = Chapter::where('subject', $subject)->get();
                }

                $allUsers = User::all();

                return view('admin.listAll', ['loggedInUser' => $loggedInUser, 'allChapters' => $allChapters, 'allUsers' => $allUsers]);
            } else {
                return redirect('/'); // Redirect non-admin users to the home page
            }
        } else {
            return redirect('/');
        }
    }
}
