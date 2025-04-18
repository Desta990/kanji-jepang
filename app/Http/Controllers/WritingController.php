<?php

namespace App\Http\Controllers;

use App\Models\Kanji;
use Illuminate\Http\Request;

class WritingController extends Controller
{
    public function index()
    {
       
        $kanjis = Kanji::inRandomOrder()->take(10)->get(); 
        return view('writing.index', compact('kanjis'));
    }
}
