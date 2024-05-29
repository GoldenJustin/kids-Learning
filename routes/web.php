<?php

use App\Http\Controllers\Admin\StudentScoreController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\QuizResultsController;
use App\Http\Middleware\AdminMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('daycare.homepage');
// });
Route::get('video', function () {
    return view('daycare.video');
});
Route::get('audio', function () {
    return view('daycare.audio');
});
Route::get('puzzle', function () {
    return view('puzzles.index');
});
Route::get('lion', function () {
    return view('puzzles.lion');
});
Route::get('letter', function () {
    return view('puzzles.letter');
});
Route::get('monkey', function () {
    return view('puzzles.monkey');
});
Route::get('elephant', function () {
    return view('puzzles.elephant');
});
Route::get('books', function () {
    return view('daycare.books');
});

Route::get('/', [App\Http\Controllers\DashboardController::class, 'homepage'])->name('homepage');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/addition', [QuizResultsController::class, 'add'])->name('add');

    Route::get('/subtract', [QuizResultsController::class, 'subtract'])->name('subtract');
    Route::post('/store-quiz-result', [QuizResultsController::class, 'store'])->name('store.quiz.result');


   
   
    Route::get('contact-us', function () {
        return view('daycare.contact');
    });
    Route::get('learn', function () {
        return view('daycare.learn');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');


    Route::get('lessons/create', [LessonController::class, 'create'])->name('lessons.create');
    Route::delete('/lessons/{lesson}', [LessonController::class, 'delete'])->name('lessons.delete');

    Route::get('lessons/enroll', [StudentsController::class, 'enroll'])->name('student.store-lessons');
    Route::post('lessons', [LessonController::class, 'store'])->name('lessons.store');
    Route::get('view/lessons', [LessonController::class, 'store'])->name('lessons.view');
});



Route::group(['middleware' => ['role:super-admin|staff|student']], function () {
    Route::resource('permissions', App\Http\Controllers\Permission\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\Permission\PermissionController::class, 'destroy']);

    Route::resource('roles', App\Http\Controllers\Role\RoleController::class);
    Route::get('roles/{roleId}/delete', [App\Http\Controllers\Role\RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\Role\RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\Role\RoleController::class, 'givePermissionToRole']);

    Route::resource('users', App\Http\Controllers\User\UserController::class);
    Route::resource('student', App\Http\Controllers\studentsController::class);
    Route::get('users/{userId}/delete', [App\Http\Controllers\User\UserController::class, 'destroy']);
});

Route::middleware(AdminMiddleware::class)->group(function(){
    Route::get('/admin/student/score', [StudentScoreController::class, 'student_scores'])->name('admin.student.score');
});

require __DIR__ . '/auth.php';
