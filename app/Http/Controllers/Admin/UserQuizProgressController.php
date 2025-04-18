<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserQuizProgress;
use App\Models\User;

class UserQuizProgressController extends Controller
{
    public function index()
    {
        $userProgress = UserQuizProgress::with('user')->orderBy('user_id')->get();
        return view('admin.user-quiz-progress.index', compact('userProgress'));
    }
}
