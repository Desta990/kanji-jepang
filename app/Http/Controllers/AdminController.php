<?php

namespace App\Http\Controllers;

use App\Models\Kanji;  // Pastikan model Kanji sudah diimport
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ActivityLog;
use App\Models\UserQuizProgress;


class AdminController extends Controller
{
    // Menambahkan middleware untuk memastikan hanya admin yang bisa mengakses controller ini
    public function __construct()
    {
        $this->middleware('role:admin'); // Ini memeriksa jika user adalah admin
    }

    
    public function index()
    {
        $totalUsers = User::count(); // Hitung total pengguna
        $totalKanji = Kanji::count(); // Hitung total kanji
        $totalActivity = activityLog::count(); // Hitung total kuis
        $totalQuiz = UserQuizProgress::count(); // Hitung total kuis

        return view('admin.dashboard', compact('totalUsers', 'totalKanji', 'totalActivity', 'totalQuiz'));
    }
    

    public function kanjiIndex()
    {
        // Ambil semua data kanji dari database
        $kanjis = Kanji::all();  // Pastikan Kanji adalah model yang sudah ada

        // Kirimkan data kanji ke view admin.kanji.index
        return view('admin.kanji.index', compact('kanjis'));
    }
    

    public function activityLog()
    {
        return view('admin.activity-log.index');
    }

    public function quizProgress()
    {
        return view('admin.user-quiz-progress.index');
    }

}
