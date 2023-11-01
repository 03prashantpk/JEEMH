<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterController extends Controller
{
    public function deleteChapter(Request $request, $chapterId)
    {
        // Find the chapter to delete by its ID
        $chapter = Chapter::find($chapterId);

        if (!$chapter) {
            return redirect()->route('admin.listAll')->with('error', 'Chapter not found.');
        }

        // Delete the chapter
        $chapter->delete();

        return redirect()->route('admin.listAll')->with('success', 'Chapter deleted successfully.');
    }
}
