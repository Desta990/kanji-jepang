<x-guest-layout>
    <html lang="id">
        <head>
            <meta charset="utf-8" />
            <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            <title>Halaman Daftar</title>
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
                    <!-- Logo Section if needed -->
                </div>
                <div class="flex w-full">
                    <!-- Left Section -->
                    <div class="w-1/2 p-10">
                        <h1 class="text-3xl font-bold mb-4">Bergabunglah dengan Kami!</h1>
                        <p class="text-gray-600 mb-8">
                            Daftarkan akun Anda dan mulai perjalanan belajar Kanji Jepang dari N5 hingga N1 dengan sistem terstruktur.
                        </p>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="mb-4">
                                <x-input-label for="name" :value="__('Nama')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4 mb-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4 mb-4">
                                <x-input-label for="password" :value="__('Kata Sandi')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4 mb-4">
                                <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" />
                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-between mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Sudah punya akun?') }}
                                </a>

                                <x-primary-button class="ms-3">
                                    {{ __('Daftar') }}
                                </x-primary-button>
                            </div>
                        </form>

                        <p class="text-center text-sm text-gray-500 mt-6">
                            Sudah punya akun?
                            <a class="text-green-500" href="{{ route('login') }}">Masuk sekarang</a>
                        </p>
                    </div>

                    <!-- Right Section -->
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
