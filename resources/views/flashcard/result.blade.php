<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <h1 class="text-center text-2xl font-bold my-6 text-gray-100">Hasil Kuis Kanji - Level {{ strtoupper($level) }}</h1>

            <div class="text-center">
                <p class="text-lg">Skor Anda: {{ $score }} / {{ $totalQuestions }}</p>

                @if($score >= 5 && $level == 'n5')
                    <p class="text-green-500">Selamat! Anda dapat melanjutkan ke level N4.</p>
                @else
                    <p class="text-red-500">Skor Anda kurang dari 5. Anda tidak dapat melanjutkan ke level N4.</p>
                @endif

                <div class="mt-6 text-center">
                    <a href="{{ route('flashcard.index') }}" class="bg-gray-700 text-white px-6 py-2 rounded-lg">Kembali ke Halaman Index</a>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
