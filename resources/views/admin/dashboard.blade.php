@extends('layouts.admin')

@section('content')
<div class="bg-gradient-to-r from-gray-200 via-gray-300 to-gray-200 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 shadow-lg rounded-lg mt-8 p-6">
    <h3 class="text-2xl font-extrabold text-gray-800 dark:text-gray-100">Welcome, {{ auth()->user()->name }}!</h3>
    <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
        Selamat datang di dashboard admin! Di sini Anda dapat mengelola data pengguna, daftar kanji, dan melihat kemajuan kuis pengguna.
    </p>
</div>


<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-8">
    <div class="bg-blue-500 hover:bg-blue-600 text-white transition-all duration-200 ease-in-out rounded-lg shadow-lg p-6 text-center">
        <h4 class="text-lg font-semibold">Total Pengguna</h4>
        <p class="text-4xl font-bold mt-2">{{ $totalUsers }}</p>
    </div>
    <div class="bg-green-500 hover:bg-green-600 text-white transition-all duration-200 ease-in-out rounded-lg shadow-lg p-6 text-center">
        <h4 class="text-lg font-semibold">Kanji Dikelola</h4>
        <p class="text-4xl font-bold mt-2">{{ $totalKanji }}</p>
    </div>
    <div class="bg-yellow-500 hover:bg-yellow-600 text-white transition-all duration-200 ease-in-out rounded-lg shadow-lg p-6 text-center">
        <h4 class="text-lg font-semibold">Aktivitas Pengguna</h4>
        <p class="text-4xl font-bold mt-2">{{ $totalActivity }}</p>
    </div>
    <div class="bg-purple-500 hover:bg-purple-600 text-white transition-all duration-200 ease-in-out rounded-lg shadow-lg p-6 text-center">
        <h4 class="text-lg font-semibold">Kuis Selesai</h4>
        <p class="text-4xl font-bold mt-2">{{ $totalQuiz }}</p>
    </div>
</div>


<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
    <a href="{{ route('activity-log.index') }}" class="flex items-center bg-gradient-to-r from-gray-100 via-gray-200 to-gray-100 dark:from-gray-800 dark:via-gray-700 dark:to-gray-800 shadow-lg rounded-lg p-6 hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 ease-in-out">
        <i class="fas fa-users text-blue-500 text-4xl mr-6"></i>
        <div>
            <h4 class="text-lg font-bold text-gray-700 dark:text-gray-200">Kelola Pengguna</h4>
            <p class="text-sm text-gray-500 dark:text-gray-400">Lihat dan kelola data pengguna</p>
        </div>
    </a>
    <a href="{{ route('admin.kanji.index') }}" class="flex items-center bg-gradient-to-r from-gray-100 via-gray-200 to-gray-100 dark:from-gray-800 dark:via-gray-700 dark:to-gray-800 shadow-lg rounded-lg p-6 hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 ease-in-out">
        <i class="fas fa-font text-green-500 text-4xl mr-6"></i>
        <div>
            <h4 class="text-lg font-bold text-gray-700 dark:text-gray-200">Kelola Kanji</h4>
            <p class="text-sm text-gray-500 dark:text-gray-400">Tambah, ubah, dan hapus data kanji</p>
        </div>
    </a>
    <a href="{{ route('admin.user-quiz.index') }}" class="flex items-center bg-gradient-to-r from-gray-100 via-gray-200 to-gray-100 dark:from-gray-800 dark:via-gray-700 dark:to-gray-800 shadow-lg rounded-lg p-6 hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 ease-in-out">
        <i class="fas fa-clipboard-check text-yellow-500 text-4xl mr-6"></i>
        <div>
            <h4 class="text-lg font-bold text-gray-700 dark:text-gray-200">Kelola Kuis</h4>
            <p class="text-sm text-gray-500 dark:text-gray-400">Lihat dan kelola kuis kanji</p>
        </div>
    </a>
</div>

@endsection

@push('styles')
<style>
    body {
        background: linear-gradient(to right, #f3f4f6, #f7fafc, #f3f4f6);
        background-color: #1a202c;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('activityChart').getContext('2d');
    const activityChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
            datasets: [{
                label: 'Aktivitas Harian',
                data: [12, 19, 3, 5, 2, 3, 7], 
                backgroundColor: '#4a90e2',
                borderColor: '#357ABD',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endpush
