<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Log;  // Untuk log debug

class LogUserLogin
{
    public function handle(Login $event)
    {
        // Cek jika data event sudah benar
        Log::info('User logged in: ' . $event->user->name);  // Log untuk debugging

        // Mencatat aktivitas login
        ActivityLog::create([
            'user_id' => $event->user->id,
            'activity' => 'User logged in',
            'ip_address' => request()->ip(),
        ]);
    }
}

