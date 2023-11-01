<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterPriceUpdateController extends Controller
{
    public function updateAmount(Request $request, $chapterId)
    {
        // Validate the request data for updating the amount
        $request->validate([
            'updated_amount' => 'required|numeric',
        ]);

        // Find the chapter by its ID
        $chapter = Chapter::findOrFail($chapterId);

        // Update the amount with the new value
        $chapter->update(['amount' => $request->input('updated_amount')]);

        return redirect()->route('admin.listAll')->with('success', 'Amount updated successfully.');
    }
}
