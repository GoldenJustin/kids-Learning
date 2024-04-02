<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quizzes::class);
    }
}
