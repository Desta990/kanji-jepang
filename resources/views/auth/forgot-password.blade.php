<x-guest-layout>
    <html lang="id">
        <head>
            <meta charset="utf-8" />
            <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            <title>Reset Kata Sandi</title>
            <script src="https://cdn.tailwindcss.com"></script>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
            <style>
                body {
                    font-family: 'Inter', sans-serif;
                }
            </style>
        </head>
        <body class="bg-gray-100 flex items-center justify-center min-h-screen">
            <div class="bg-white shadow-lg rounded-lg max-w-md w-full p-8">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Lupa Kata Sandi?</h2>
                    <p class="text-sm text-gray-600">Kami akan mengirimkan tautan untuk mereset kata sandi Anda ke email Anda.</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full p-3 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Button -->
                    <div class="flex items-center justify-end mt-6">
                        <x-primary-button class="w-full py-3 bg-indigo-1000 hover:bg-indigo-900 text-white rounded-lg shadow-md">
                            {{ __('Kirim Tautan Reset Kata Sandi') }}
                        </x-primary-button>
                    </div>
                </form>

                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-500">
                        <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-700">Sudah ingat kata sandi? Masuk sekarang</a>
                    </p>
                </div>
            </div>
        </body>
    </html>
</x-guest-layout>
