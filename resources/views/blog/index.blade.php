@extends('layouts.home')

@section('content')
<div class="container mx-auto py-12 px-0 max-w-full">
    <!-- Header -->
    <div class="text-center mb-8 px-4">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-6 animate-fadeInDown">Berita Teratas</h1>
        <p class="text-lg text-gray-600">Temukan artikel menarik, inspirasi, dan wawasan terbaru.</p>
    </div>

    <!-- Daftar Artikel -->
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
        @foreach ($posts as $post)
            <div class="bg-white p-4 shadow-lg hover:shadow-xl rounded-lg transform transition duration-300 ease-in-out hover:-translate-y-2">
                <img class="w-full h-40 object-cover mb-4" src="{{ asset('images/'.$post->url_gambar) }}" alt="Gambar Artikel">

                <!-- Kategori Badge -->
                <span class="bg-blue-500 text-white text-xs px-2 py-1 uppercase inline-block mb-2">{{ $post->kategori }}</span>

                <h3 class="text-lg font-bold text-gray-800 mb-2 hover:text-white-600 transition">{{ $post->judul }}</h3>

                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <span>OLEH DESTA GANTENG</span>
                    <span>•</span>
                    <span>{{ $post->created_at->format('d M Y') }}</span>
                </div>

                <p class="text-gray-600 mt-4">{{ Str::limit($post->ringkasan, 90) }}</p>

                <a href="{{ url('/post/'.$post->id) }}" class="inline-block mt-4 px-4 py-2 text-white bg-gray-900 rounded-lg hover:bg-white-700 transition">Baca Selengkapnya</a>
            </div>
        @endforeach
    </section>

</div>

<!-- Animasi -->
<style>
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInDown {
        animation: fadeInDown 1s ease-out;
    }
</style>
@endsection
