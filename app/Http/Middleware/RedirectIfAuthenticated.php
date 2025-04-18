<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
  
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Pastikan email sudah diverifikasi sebelum mengakses dashboard
                if (Auth::user()->hasVerifiedEmail()) {
                    return redirect(RouteServiceProvider::HOME);
                } else {
                    // Jika email belum terverifikasi, arahkan ke halaman verifikasi
                    return redirect()->route('verification.notice');
                }
            }
        }

        return $next($request);
    }
}
