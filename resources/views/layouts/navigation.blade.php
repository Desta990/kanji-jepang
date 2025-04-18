<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Belajar Kanji</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            font-size: 1.1rem;
        }
        h1, h2 {
            font-family: 'Inter', sans-serif;
            font-size: 2.5rem;
        }
        nav a {
            font-family: 'Inter', sans-serif;
            font-size: 1.125rem !important;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }
        nav a:hover {
            color: #4b5563;
        }
        footer {
            font-family: 'Inter', sans-serif;
            font-size: 1.125rem;
        }

        /* Styling Dropdown */
        .dropdown-button {
            font-family: 'Inter', sans-serif !important;
            font-size: 1.125rem !important;
            text-transform: uppercase !important;
        }
        .dropdown-content {
            font-family: 'Inter', sans-serif !important;
            font-size: 1.125rem !important;
        }
        .dropdown-content a:hover {
            color: #4b5563;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navigasi Utama -->
    <nav class="bg-white w-full font-sans">
        <div class="flex items-center justify-between p-6 bg-white shadow-md">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <div class="shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('images/8.png') }}" class="h-12" alt="Logo Belajar Kanji"/>
                    </a>
                </div>

                <!-- Tautan Navigasi -->
                <div class="flex items-center space-x-4">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gray-800 hover:text-gray-600">
                        {{ __('Dasbor') }}
                    </x-nav-link>
                    <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')" class="text-gray-800 hover:text-gray-600">
                        {{ __('Kanji') }}
                    </x-nav-link>

                    <!-- Dropdown Kuis -->
                    <div class="relative">
                        <button class="dropdown-button text-gray-800 hover:text-gray-600 px-4 py-2">
                            {{ __('Kuis') }}
                        </button>
                        <div class="dropdown-content absolute hidden bg-white shadow-lg rounded-lg mt-1 w-48">
                            <a href="{{ route('quizzes.index') }}" class="block px-4 py-2 text-gray-800 hover:text-gray-600">
                                {{ __('Kuis') }}
                            </a>
                            <a href="{{ route('flashcard.index') }}" class="block px-4 py-2 text-gray-800 hover:text-gray-600">
                                {{ __('Kartu Kilat') }}
                            </a>
                            <a href="{{ route('writing.index') }}" class="block px-4 py-2 text-gray-800 hover:text-gray-600">
                                {{ __('Mode Menulis') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dropdown Pengguna -->
            <div class="flex items-center space-x-4">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="dropdown-button inline-flex items-center px-3 py-2 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-800 bg-white hover:text-gray-600 focus:outline-none transition duration-150 ease-in-out">
                            <div class="text-lg font-light text-gray-800">{{ Auth::user()->name }}</div>
                            <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="dropdown-content text-lg text-gray-800 hover:text-gray-600">
                            {{ __('Profil') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('home')" class="dropdown-content text-lg text-gray-800 hover:text-gray-600">
                            {{ __('Beranda') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-content text-lg text-gray-800 hover:text-gray-600">
                                {{ __('Keluar') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </nav>

  

    <!-- Skrip untuk Dropdown -->
    <script>
        const dropdownButton = document.querySelector('.dropdown-button');
        const dropdownContent = document.querySelector('.dropdown-content');

        dropdownButton.addEventListener('click', function () {
            dropdownContent.classList.toggle('hidden');
        });

        document.addEventListener('click', function (e) {
            if (!dropdownButton.contains(e.target) && !dropdownContent.contains(e.target)) {
                dropdownContent.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
