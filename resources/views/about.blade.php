@extends('layouts.home')

@section('content')
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksplorasi Kanji</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans JP', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Hero Section -->
    <section class="relative bg-gray-100 pt-32 pb-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold text-gray-800">Eksplorasi Dunia Kanji Jepang</h1>
            <p class="mt-4 text-gray-600">Temukan keindahan dan kompleksitas kanji dalam kehidupan sehari-hari dan budaya Jepang.</p>
            <a 
                href="{{ route('blog.index') }}" 
                class="mt-6 inline-block bg-gray-900 text-white px-6 py-3 rounded transition-all duration-300 ease-in-out hover:bg-gray-800 active:bg-gray-700 focus:ring-4 focus:ring-gray-300 focus:outline-none"
            >
                Mulai Eksplorasi
            </a>
        </div>
    </section>

    <!-- Kanji Highlights Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800">Fakta Menarik Tentang Kanji</h2>
            <p class="mt-4 text-gray-600">Pelajari asal-usul, makna, dan cara penggunaan kanji dalam budaya Jepang.</p>
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Sejarah Kanji</h3>
                        <p class="mt-4 text-gray-600">Kanji berasal dari Tiongkok dan telah digunakan di Jepang selama ribuan tahun.</p>
                        <a href="#" class="mt-6 inline-block bg-gray-900 text-white px-4 py-2 rounded hover:bg-gray-800 active:bg-gray-700">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Makna Kanji</h3>
                        <p class="mt-4 text-gray-600">Setiap karakter memiliki makna unik yang dapat berubah tergantung pada konteksnya.</p>
                        <a href="#" class="mt-6 inline-block bg-gray-900 text-white px-4 py-2 rounded hover:bg-gray-800 active:bg-gray-700">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800">Penggunaan Modern</h3>
                        <p class="mt-4 text-gray-600">Kanji digunakan dalam tulisan sehari-hari, nama, dan ekspresi artistik.</p>
                        <a href="#" class="mt-6 inline-block bg-gray-900 text-white px-4 py-2 rounded hover:bg-gray-800 active:bg-gray-700">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cultural Impact Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800">Kanji dalam Budaya Jepang</h2>
            <p class="mt-4 text-gray-600">Kanji tidak hanya sekadar tulisan, tetapi juga cerminan budaya, seni, dan filosofi Jepang.</p>
            <div class="mt-6 flex justify-center space-x-4">
                <a href="#" class="bg-gray-900 text-white px-6 py-3 rounded hover:bg-gray-800 active:bg-gray-700">Pelajari Kanji</a>
                <a href="#" class="bg-gray-900 text-white px-6 py-3 rounded hover:bg-gray-800 active:bg-gray-700">Eksplorasi Budaya</a>
            </div>
        </div>
    </section>
</body>
@endsection
