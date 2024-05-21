<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResults extends Model
{
    protected $fillable = ['quiz_score', 'user_id'];
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function quiz()
    {
        return $this->belongsTo(Quizzes::class);
    }
}
