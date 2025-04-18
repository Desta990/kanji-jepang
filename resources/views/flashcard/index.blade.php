<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto my-8 bg-transparent">
            <!-- Judul Halaman -->
            <h1 class="text-center text-2xl font-bold my-6 text-gray-900">Pilih Level Kartu Kilat</h1>

            <!-- Deskripsi Halaman -->
            <p class="text-center text-gray-600 mb-6">Pilih level kuis untuk mulai menguji pengetahuan Anda tentang kanji Jepang. Setiap level memiliki tantangan yang semakin sulit, mulai dari N5 hingga N1. Pastikan Anda telah menguasai level sebelumnya sebelum melanjutkan ke level yang lebih tinggi.</p>

            <!-- Fitur Pencarian -->
            <div class="mb-6 text-center">
                <div class="relative inline-flex w-1/3">
                    <input type="text" id="search" class="px-4 py-2 border border-gray-300 rounded-l-lg w-full focus:outline-none focus:ring-2 focus:ring-gray-200" placeholder="Cari level...">
                    <button onclick="searchLevels()" class="bg-gray-900 text-white px-4 py-2 rounded-r-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">Cari</button>
                </div>
            </div>

            <!-- Grid untuk Daftar Level Kuis -->
            <div id="levels-grid" class="grid grid-cols-2 gap-6 mt-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($levels as $level)
                    <a href="{{ route('flashcard.show', $level) }}" class="level-item bg-gray-800 text-white p-4 text-center rounded-lg hover:bg-gray-700 transition duration-300 ease-in-out shadow-lg hover:shadow-xl transform hover:scale-105">
                        <span class="font-semibold text-lg">{{ strtoupper($level) }}</span>
                        <p class="text-sm mt-2">Mulai kuis flashcard pada level {{ strtoupper($level) }} untuk menguji pengetahuan kanji Anda!</p>
                    </a>
                @endforeach
            </div>
        </div>
    </x-slot>
    @include('layouts.footer') 
</x-app-layout>

<!-- Styling Khusus -->
<style>
    /* Styling untuk Input Pencarian dengan Tombol */
    .relative {
        display: flex;
    }
    input#search {
        font-size: 1rem;
        border-radius: 0.375rem;
        width: 100%;
        max-width: 300px;
    }
   
 
    /* Styling untuk Header dan Level */
    .container {
        padding: 0 1.5rem;
        background-color: transparent;
    }
    h1 {
        color: #193368; /* Warna default untuk teks header */
    }
    p {
        color: #ffffff; 
    }

    /* Styling untuk Level Item */
    .level-item {
        background-color: #2d3748;
        color: #f7fafc;
    }
    .level-item:hover {
        background-color: #000000;
    }
</style>

<!-- JavaScript untuk Fitur Pencarian -->
<script>
    function searchLevels() {
        const query = document.getElementById('search').value.toLowerCase();
        const items = document.querySelectorAll('.level-item');
        
        items.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(query)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>
