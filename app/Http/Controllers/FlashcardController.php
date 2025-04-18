<?php

namespace App\Http\Controllers;

use App\Models\Kanji;
use Illuminate\Http\Request;

class FlashcardController extends Controller
{
    public function index()
    {
        // Ambil semua level yang unik dari tabel kanji
        $levels = Kanji::distinct()->pluck('level');

        return view('flashcard.index', compact('levels'));
    }

    public function show($level)
    {
        // Ambil kanji berdasarkan level yang dipilih
        $kanjis = Kanji::where('level', $level)->get();

        // Cek apakah ada kanji untuk level yang dipilih
        if ($kanjis->isEmpty()) {
            return redirect()->route('flashcard.index')->with('error', 'Tidak ada kanji untuk level ini.');
        }

        // Tampilkan halaman kuis untuk level yang dipilih
        return view('flashcard.show', compact('kanjis', 'level'));
    }
}

