<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kanji extends Model
{
    use HasFactory;

    protected $fillable = ['kanji', 'kunyomi', 'onyomi', 'cara_baca', 'arti', 'level'];
}
