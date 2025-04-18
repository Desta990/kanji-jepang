
    
<x-app-layout>
    <x-slot name="header">
      
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Kanji") }}
                </div>
            </head>
            <body>
                <div class="container">
                    <h1>User Dashboard</h1>
                    <p>Selamat datang, {{ auth()->user()->name }}!</p>
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

            
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg">Apa itu Kanji?</h3>
                    <p>Kanji adalah salah satu dari tiga sistem penulisan dalam bahasa Jepang, yang berasal dari karakter Tiongkok. Setiap kanji memiliki arti dan cara baca yang berbeda.</p>
                </div>
              
        </div>
    </div>
</x-slot>
@include('layouts.footer') 
</x-app-layout>

