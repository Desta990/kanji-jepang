@extends('layouts.home')

@section('content')

<main class="flex flex-col md:flex-row items-center justify-between p-6 md:p-12 lg:p-24">
    <div class="text-center md:text-left md:w-1/2 space-y-4">
        <p class="text-sm uppercase text-gray-600">Welcome to Kanji Study</p>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800">Master Kanji & Japanese</h1>
        <p class="text-lg md:text-xl text-gray-700">
            Kanji adalah karakter Tionghoa yang digunakan dalam sistem penulisan bahasa Jepang. Kanji digunakan untuk menulis kata-kata yang memiliki makna tertentu.
        </p>
        <a class="inline-block px-6 py-3 border border-gray-800 text-gray-800 hover:bg-gray-800 hover:text-white transition" href="{{ route('about') }}">PELAJARI LEBIH LANJUT →</a>
    </div>

    <div class="mt-8 md:mt-0 md:w-1/2">
        <img src="{{ asset('images/19.jpg') }}" alt="Kanji Mastery Image"/>
    </div>
</main>

<section class="bg-white text-gray-800 p-6 md:p-12 lg:p-24">
    <div class="container mx-auto">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center mb-8">
            Jelajahi Budaya Jepang
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                ['title' => 'Upacara Teh Tradisional Jepang', 'image' => '2.jpeg', 'desc' => 'Rasakan ketenangan dan kesadaran dalam upacara teh tradisional Jepang.'],
                ['title' => 'Kaligrafi Jepang', 'image' => '4.jpeg', 'desc' => 'Pelajari seni Shodo, kaligrafi tradisional Jepang, dan ekspresikan kreativitas Anda.'],
                ['title' => 'Masakan Jepang', 'image' => '3.jpeg', 'desc' => 'Temukan cita rasa Jepang dengan hidangan tradisional seperti sushi, ramen, dan lainnya.'],
                ['title' => 'Festival Jepang', 'image' => '1.jpeg', 'desc' => 'Rayakan festival yang semarak di Jepang, mulai dari festival bunga sakura hingga matsuri tradisional.'],
                ['title' => 'Taman Jepang', 'image' => '5.jpeg', 'desc' => 'Jelajahi taman Jepang yang tenang dan dirancang dengan penuh perhatian, tempat yang sempurna untuk relaksasi.'],
                ['title' => 'Kesenian Jepang', 'image' => '6.jpeg', 'desc' => 'Nikmati keindahan seni Jepang, dari lukisan hingga patung tradisional yang memikat.']
            ] as $item)
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg item" onclick="animateClick(this)">
                <img alt="{{ $item['title'] }}" class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('images/' . $item['image']) }}"/>
                <h3 class="text-xl font-bold mt-4 text-gray-800">{{ $item['title'] }}</h3>
                <p class="mt-2 text-gray-700">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .item.clicked {
        transform: scale(1.1);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }
</style>

<script>
    function animateClick(element) {
        element.classList.add('clicked');
        setTimeout(() => {
            element.classList.remove('clicked');
        }, 300);
    }
</script>

@endsection
