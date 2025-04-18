<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Bisa menambahkan logika bisnis atau data yang ingin ditampilkan di dashboard
        return view('admin.dashboard');
    }
}
