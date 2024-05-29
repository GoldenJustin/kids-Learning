<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\QuizResults;
use App\Models\Student;
use App\Models\User;

use Illuminate\Http\Request;


class DashboardController extends Controller
{

    protected $data = [];
    public function __construct()
    {
        $this->data['scores'] = QuizResults::all();
    }
    public function index()
    {

        $totalStudent = User::whereHas('roles', function ($query) {
            $query->where('name', 'student');
        })->count();

        $totalLesson = Lesson::count();
        $totalQuiz = QuizResults::count();

        return view('dashboard.layouts.home', [
            'totalStudent' => $totalStudent,
            'totalLesson' => $totalLesson,
            'totalquiz' => $totalQuiz,
        ]);
    }

    public function homepage()
    {
        // if (auth()->user()->hasRole('super-admin')) {
        //     $this->data['scores'] = QuizResults::all();
        // } 
        // else {
        //     $this->data['scores'] = auth()->user()->scores;
        // }
        return view('daycare.homepage');
    }
}
