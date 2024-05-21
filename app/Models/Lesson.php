<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_name', 'description',
    ];

    // public function students()
    // {
    //     return $this->belongsToMany(Student::class);
    // }

    public function quizzes()
    {
        return $this->hasMany(Quizzes::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class, 'lesson_student', 'lesson_id', 'student_id')->withTimestamps();
    }
}
