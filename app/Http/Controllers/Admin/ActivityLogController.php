<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;

class ActivityLogController extends Controller
{
    public function index()
    {
        // Ambil semua aktivitas login yang dicatat
        $activityLogs = ActivityLog::with('user')->where('activity', 'User logged in')->orderBy('created_at', 'desc')->get();
        return view('admin.activity-log.index', compact('activityLogs'));
    }
}
