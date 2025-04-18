<x-app-layout>
    <x-slot name="header">
        <main class="flex flex-col md:flex-row items-center justify-between p-6 md:p-12 lg:p-24 bg-cover bg-center" style="background-image: url('images/12.jpg'); background-size: cover; background-position: center;">
            <div class="text-center md:text-left md:w-1/2 space-y-4">
                <p class="text-sm uppercase text-gray-600">Welcome to Kanji Study</p>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800">Master Kanji & Japanese</h1>
                <p class="text-lg md:text-xl text-gray-700">
                    Kanji adalah karakter Tionghoa yang digunakan dalam sistem penulisan bahasa Jepang. Kanji digunakan untuk menulis kata-kata yang memiliki makna tertentu.
                </p>
                <a class="inline-block px-6 py-3 border border-gray-800 text-gray-800 hover:bg-gray-800 hover:text-white transition" href="{{ route('about') }}">PELAJARI LEBIH LANJUT →</a>
            </div>
        </main>
    </x-slot>

    @include('layouts.footer') 
</x-app-layout>
