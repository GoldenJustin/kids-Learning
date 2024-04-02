<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model
{
    use HasFactory;
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function quizResults()
    {
        return $this->hasMany(QuizResults::class);
    }
}
