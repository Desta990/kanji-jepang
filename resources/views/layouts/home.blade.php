<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Belajar Kanji</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 1.125rem;
        }
        h1, h2 {
            font-family: 'Roboto', sans-serif;
            font-size: 2rem;
        }
        nav a {
            font-family: 'Roboto', sans-serif;
            font-size: 1.125rem;
        }
        footer {
            font-family: 'Roboto', sans-serif;
            font-size: 1.125rem;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="flex justify-between items-center p-6 bg-white shadow-md">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/8.png') }}" class="h-12" alt="Logo"/>
            <nav class="hidden md:flex space-x-8">
                <a class="text-gray-800 hover:text-gray-600" href="{{ route('home') }}">BERANDA</a>
                <a class="text-gray-800 hover:text-gray-600" href="{{ route('about') }}">TENTANG</a>
                <a class="text-gray-800 hover:text-gray-600" href="{{ route('blog.index') }}">BLOG</a>
                <a class="text-gray-800 hover:text-gray-600" href="{{ route('contact') }}">KONTAK</a>
            </nav>
        </div>
        @if (Route::has('login'))
        <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-800 hover:text-gray-600">DASBOR</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-800 hover:text-gray-600">MASUK</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-gray-800 hover:text-gray-600">DAFTAR</a>
                    @endif
                @endauth
            </div>
        @endif
    </header>

 


    <!-- Main Content -->
    @yield('content')

    <footer class="bg-gray-800 text-white p-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Tentang Kami -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Tentang Kami</h3>
                    <p class="text-gray-400">
                        Kanji Study didedikasikan untuk membantu Anda menguasai bahasa Jepang dan menyelami budaya Jepang yang kaya. Bergabunglah bersama kami dan mulailah perjalanan Anda hari ini!
                    </p>
                </div>
    
                <!-- Tautan Cepat -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Tautan Cepat</h3>
                    <ul>
                        <li class="mb-2">
                            <a class="text-gray-400 hover:text-white" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-gray-400 hover:text-white" href="{{ route('about') }}">Tentang</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-gray-400 hover:text-white" href="{{ route('blog.index') }}">Blog</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-gray-400 hover:text-white" href="{{ route('contact') }}">Kontak</a>
                        </li>
                    </ul>
                </div>
    
                <!-- Hubungi Kami -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Hubungi Kami</h3>
                    <p class="text-gray-400">
                        <strong>Email:</strong> info@kanjistudy.com
                    </p>
                    <p class="text-gray-400">
                        <strong>Telepon:</strong> +123 456 7890
                    </p>
                    <p class="text-gray-400">
                        <strong>Alamat:</strong> Jl. Kanji No. 123, Tokyo, Jepang
                    </p>
                </div>
            </div>
    
         
        </div>
    </footer>
    