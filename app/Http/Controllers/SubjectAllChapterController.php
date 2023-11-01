<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter; // Import your Chapter model

class SubjectAllChapterController extends Controller
{
    public function showAllChapters($subject_name)
{
    // Fetch data related to the subject field using the $subject_name parameter
    $chapters = Chapter::where('subject', $subject_name)->get();

    // Pass the subject name and chapters data to the view
    return view('streams', compact('subject_name', 'chapters'));
}
}
