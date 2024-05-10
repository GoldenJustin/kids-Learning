<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizResults;

class QuizResultsController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'quiz_score' => 'required|integer',
        ]);

        // Store quiz result for authenticated student
        $QuizResults = new QuizResults();
        $QuizResults->quiz_score = $validatedData['quiz_score'];
        $QuizResults->student_id = auth()->user()->id;
        // Assuming the student ID is the same as the user ID
        
        $QuizResults->save();

        return response()->json(['message' => 'Quiz result stored successfully'], 200);
    }
}
