<footer class="bg-gray-800 text-white p-8">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Tentang Kami -->
            <div>
                <h3 class="text-lg font-bold mb-4">Tentang Kami</h3>
                <p class="text-gray-400">
                    Kanji Study didedikasikan untuk membantu Anda menguasai bahasa Jepang dan menyelami budaya Jepang yang kaya. Bergabunglah bersama kami dan mulailah perjalanan Anda hari ini!
                </p>
            </div>

            <!-- Tautan Cepat -->
            <div>
                <h3 class="text-lg font-bold mb-4">Tautan Cepat</h3>
                <ul>
                    <li class="mb-2">
                        <a class="text-gray-400 hover:text-white" href="{{ route('dashboard') }}">Dasbor</a>
                    </li>
                    <li class="mb-2">
                        <a class="text-gray-400 hover:text-white" href="{{ route('kanji.index') }}">Kanji</a>
                    </li>
                    <li class="mb-2">
                        <a class="text-gray-400 hover:text-white" href="{{ route('quizzes.index') }}">Kuis</a>
                    </li>
                    <li class="mb-2">
                        <a class="text-gray-400 hover:text-white" href="{{ route('flashcard.index') }}">Kartu Kilat</a>
                    </li>
                    <li class="mb-2">
                        <a class="text-gray-400 hover:text-white" href="{{ route('writing.index') }}">Menulis</a>
                    </li>
                </ul>
            </div>

            <!-- Hubungi Kami -->
            <div>
                <h3 class="text-lg font-bold mb-4">Hubungi Kami</h3>
                <p class="text-gray-400">
                    <strong>Email:</strong> info@kanjistudy.com
                </p>
                <p class="text-gray-400">
                    <strong>Telepon:</strong> +123 456 7890
                </p>
                <p class="text-gray-400">
                    <strong>Alamat:</strong> Jl. Kanji No. 123, Tokyo, Jepang
                </p>
            </div>
        </div>

      

      
    </div>
</footer>
