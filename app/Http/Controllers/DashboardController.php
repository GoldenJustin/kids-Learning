<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Student;
use App\Models\User;

use Illuminate\Http\Request;

// class DashboardController extends Controller
// {
//     public function index()
//     {
//         return view('dashboard.layouts.home');
//         $totalUsers = User::count(); // Retrieve the total number of users

//         return view('dashboard', ['totalUsers' => $totalUsers]);
//     }
// }

class DashboardController extends Controller
{
    public function index()
    {
        $totalStudent = Student::count();
        $totalLesson = Lesson::count();

        return view('dashboard.layouts.home', [
            'totalStudent' => $totalStudent,
            'totalLesson' => $totalLesson
        ]);
    }
}
