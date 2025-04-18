<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFlashcardProgress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'level',
        'status', // 'unlocked' atau 'locked'
    ];
}


