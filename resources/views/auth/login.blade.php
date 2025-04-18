<x-guest-layout>
    <html lang="id">
        <head>
            <meta charset="utf-8" />
            <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            <title>Halaman Login</title>
            <script src="https://cdn.tailwindcss.com"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
            <style>
                body {
                    font-family: 'Inter', sans-serif;
                }
            </style>
        </head>
        <body class="bg-gray-100 flex items-center justify-center min-h-screen">
            <div class="bg-white shadow-lg rounded-lg flex flex-col items-center max-w-4xl w-full">
                <div class="w-full flex justify-center p-6">
                    <!-- Tambahkan logo di sini jika diperlukan -->
                </div>
                <div class="flex w-full">
                    <!-- Bagian Kiri -->
                    <div class="w-1/2 p-10">
                        <h1 class="text-3xl font-bold mb-4">Selamat Datang Kembali!</h1>
                        <p class="text-gray-600 mb-8">
                            Pelajari Kanji Jepang dengan sistem kami yang terstruktur dari level N5 hingga N1. Tingkatkan kemampuan Anda sekarang.
                        </p>

                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Alamat Email -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Kata Sandi -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Kata Sandi')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Ingat Saya -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Ingat Saya') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                        {{ __('Lupa kata sandi Anda?') }}
                                    </a>
                                @endif

                                <x-primary-button class="ms-3">
                                    {{ __('Masuk') }}
                                </x-primary-button>
                            </div>
                        </form>


                      

                        <p class="text-center text-sm text-gray-500 mt-6">
                            Belum punya akun?
                            <a class="text-green-500" href="{{ route('register') }}">Daftar sekarang</a>
                        </p>
                    </div>

                    <!-- Bagian Kanan -->
                    <div class="w-1/2 bg-green-50 p-10 flex flex-col justify-center items-center">
                        <div class="relative mb-6">
                            <img src="{{ asset('images/13.png') }}" alt="Ilustrasi Kanji" />
                        </div>

                        <div class="bg-white p-4 rounded-lg shadow-md mb-6">
                            <h2 class="text-lg font-semibold">Level Kanji</h2>
                            <p class="text-gray-500">5 Level</p>
                            <div class="flex items-center mt-2">
                                <span class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-full">N5</span>
                                <span class="ml-auto text-gray-500">Progres: 0%</span>
                            </div>
                        </div>

                        <p class="text-center text-gray-600">
                            Kuasai Kanji Jepang dengan <span class="font-semibold">Website Belajar Kanji</span>
                        </p>
                    </div>
                </div>
            </div>
        </body>
    </html>
</x-guest-layout>
