<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\UserQuizProgress;
use App\Models\Quiz;

class CheckQuizAccess
{
    public function handle(Request $request, Closure $next)
    {
        $quiz = $request->route('quiz');
        $previousQuiz = Quiz::where('id', '<', $quiz->id)->latest()->first();

        if ($previousQuiz) {
            $progress = UserQuizProgress::where('user_id', auth()->id())
                ->where('quiz_id', $previousQuiz->id)
                ->first();
            if (!$progress || $progress->score < $previousQuiz->required_score) {
                return redirect()->route('quizzes.index')
                    ->with('error', 'Anda harus menyelesaikan level sebelumnya dengan skor yang cukup.');
            }
        }

        return $next($request);
    }
}
