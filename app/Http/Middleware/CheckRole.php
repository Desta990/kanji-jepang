<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
{
    \Log::info('Middleware started.');

    if (!Auth::check()) {
        \Log::info('User not authenticated.');
        return redirect()->route('login');
    }

    $user = Auth::user();
    \Log::info('User info: ', ['id' => $user->id, 'role' => $user->role]);

    if ($role === 'admin' && !$user->isAdmin()) {
        \Log::info('Unauthorized access by user: ', ['id' => $user->id]);
        abort(403, 'Unauthorized access.');
    }

    \Log::info('Middleware passed.');

    return $next($request);
}

}
    
    
