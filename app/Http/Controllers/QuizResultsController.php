<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizResults;

class QuizResultsController extends Controller
{
    public function add()
    {
        return view('quiz.quiz');
    }
    public function subtract()
    {
        return view('quiz.quizmin');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'quiz_score' => 'required|integer',
        ]);

        // Store quiz result for authenticated student
        $quizResult = new QuizResults();
        $quizResult->quiz_score = $validatedData['quiz_score'];
        $quizResult->user_id = auth()->user()->id;

        $quizResult->save();

        // return response()->json(['message' => 'Quiz result stored successfully'], 200);
        
    }
}
