<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto my-8">
            <!-- Form Pencarian -->
            <form method="GET" action="{{ route('quizzes.index') }}" class="mb-12 flex justify-center">
                <input type="text" name="search" placeholder="Cari level..." 
                    class="border px-4 py-2 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-white-900 focus:border-transparent w-60">
                <button type="submit" class="bg-blue-900 text-white px-6 py-2 rounded-lg ml-4 transition-colors hover:bg-white-900">Cari</button>
            </form>

            <div class="flex flex-wrap gap-6 justify-start">
                @foreach($quizzes as $quiz)
                <div class="quiz-item p-6 border rounded-lg shadow-lg hover:shadow-xl transition-shadow hover:scale-105 w-full sm:w-1/3">
                    <h3 class="font-bold text-xl mb-2 text-gray-800">{{ $quiz->title }} (Level {{ $quiz->level }})</h3>
                    <p class="text-gray-800 mb-4">{{ $quiz->description }}</p>

                    @if(isset($userResults[$quiz->id]))
                        <div class="result mt-4">
                            <p><span class="font-semibold">Skor Anda:</span> {{ $userResults[$quiz->id]->score }}</p>
                            <p><span class="font-semibold">Status:</span> 
                                @if($userResults[$quiz->id]->score >= $quiz->required_score)
                                    <span class="text-green-600">Lulus</span>
                                @else
                                    <span class="text-red-600">Belum Lulus</span>
                                @endif
                            </p>
                        </div>
                    @elseif(session('result') && session('result')['quiz_id'] == $quiz->id)
                        <div class="result mt-4">
                            <p><span class="font-semibold">Skor Anda:</span> {{ session('result')['score'] }}</p>
                            <p><span class="font-semibold">Waktu yang digunakan:</span> {{ session('result')['time_taken'] }}</p>
                            <p><span class="font-semibold">Status:</span> 
                                <span class="{{ session('result')['status'] == 'Lulus' ? 'text-green-600' : 'text-red-600' }}">{{ session('result')['status'] }}</span>
                            </p>
                        </div>
                    @else
                        <p class="text-gray-500 mt-4">Belum mengerjakan</p>
                    @endif

                    <a href="{{ route('quizzes.show', $quiz->id) }}" 
                       class="start-quiz-btn bg-gray-800 text-white px-6 py-3 rounded-lg mt-4 inline-block hover:bg-blue-700 transition-colors w-full text-center">
                       Mulai Kuis
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </x-slot>
    @include('layouts.footer') 
</x-app-layout>

<style>
    body {
        background-color: #f9fafb;
        font-family: 'Arial', sans-serif;
    }

    .quiz-item {
        background-color: #ffffff;
        transition: transform 0.3s ease-in-out;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .quiz-item:hover {
        transform: scale(1.03);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .result p {
        font-size: 16px;
        color: #555;
    }

    .start-quiz-btn {
        display: inline-block;
        background-color: #17385a;
        color: white;
        text-align: center;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 8px;
        text-decoration: none;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    .start-quiz-btn:hover {
        background-color: #17385a;
    }

    form input {
        width: 300px;
        font-size: 16px;
        padding: 12px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .w-full {
        width: 100%;
    }

    .sm\:w-1\/3 {
        width: 31%;
    }

    .mb-12 {
        margin-bottom: 3rem;
    }
</style>
