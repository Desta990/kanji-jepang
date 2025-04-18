<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Level
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        $level = $request->route('level');

        $result = Result::where('user_id', $user->id)->where('level', $level)->first();
        if ($result && !$result->isPassed()) {
            return redirect()->route('quiz.index');
        }

        return $next($request);
    }
}