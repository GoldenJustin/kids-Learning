<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuizResults;
use Illuminate\Http\Request;

class StudentScoreController extends Controller
{
    public function student_scores(){
        $viewData['student_results'] = QuizResults::all();
        return view('admin.results.index')->with('viewData', $viewData);

    }
}
