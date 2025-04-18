<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kanji</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigasi -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3">
                        <img src="{{ asset('images/8.png') }}" class="h-12" alt="Logo"/>
                        <span class="text-gray-800 text-lg font-bold">Admin Kanji</span>
                    </a>
                </div>

                <!-- Link Navigasi untuk Desktop -->
                <div class="hidden sm:flex sm:space-x-6">
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-900 hover:bg-gray-400 px-3 py-2 rounded-md text-sm font-medium">
                        Dasbor
                    </a>
                    <a href="{{ route('admin.kanji.index') }}" class="text-gray-900 hover:bg-gray-400 px-3 py-2 rounded-md text-sm font-medium">
                        Kanji
                    </a>
                    <a href="{{ route('admin.user-quiz.index') }}" class="text-gray-900 hover:bg-gray-400 px-3 py-2 rounded-md text-sm font-medium">
                        Progres Kuis
                    </a>
                    <a href="{{ route('admin.activity-log.index') }}" class="text-gray-900 hover:bg-gray-400 px-3 py-2 rounded-md text-sm font-medium">
                        Log Aktivitas
                    </a>
                    <a href="{{ route('logout') }}" id="logout-btn" class="text-gray-900 hover:bg-gray-400 px-3 py-2 rounded-md text-sm font-medium"
                       onclick="event.preventDefault(); ubahWarnaTombolLogout(); document.getElementById('logout-form').submit();">
                        Keluar
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu Mobile -->
    <div class="sm:hidden flex items-center">
        <button type="button" class="text-white hover:bg-indigo-700 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-white" aria-label="Toggle menu">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Bagian Konten Utama -->
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @yield('content')
            </div>
        </div>
    </main>

    <!-- Form Logout Tersembunyi -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>

    <!-- Font Awesome untuk Ikon Menu Mobile -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <script>
        function ubahWarnaTombolLogout() {
            var tombolLogout = document.getElementById('logout-btn');
            tombolLogout.classList.remove('text-gray-900', 'hover:bg-gray-400');
            tombolLogout.classList.add('bg-red-600', 'text-white');
        }
    </script>
</body>
</html>
