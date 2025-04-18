<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuizProgress extends Model
{
    protected $fillable = ['user_id', 'quiz_id', 'score'];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    protected $table = 'user_quiz_progress';  

    public function user()
    {
        return $this->belongsTo(User::class);  
    }

    public function badges()
    {
        return $this->belongsToMany(Badge::class, 'user_badge', 'user_id', 'badge_id');
    }
}

