<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function quizResults()
    {
        return $this->hasMany(QuizResults::class);
    }
}
