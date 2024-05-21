<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name', 'gender', 'address',
    ];
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'lesson_student', 'student_id', 'lesson_id')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quizResults()
    {
        return $this->hasMany(QuizResults::class);
    }
}
