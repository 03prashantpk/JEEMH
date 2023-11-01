<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\User;

class ListAllChaptersHomeController extends Controller
{
    public function listTopChapters()
    {
        // Fetch the top 5 chapters from each subject
        $physicsChapters = Chapter::where('subject', 'Physics')->limit(5)->get();
        $organicChapters = Chapter::where('subject', 'Organic Chemistry')->limit(5)->get();
        $InorganicChapters = Chapter::where('subject', 'Inorganic Chemistry')->limit(5)->get();
        $mathChapters = Chapter::where('subject', 'Math')->limit(5)->get();

    
        return view('welcome', [
            'physicsChapters' => $physicsChapters,
            'organicChapters' => $organicChapters,
            'InorganicChapters' => $InorganicChapters,
            'mathChapters' => $mathChapters,
        ]);
    }
}
