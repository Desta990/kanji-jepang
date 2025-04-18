<x-app-layout>
    <x-slot name="header">
        <style>
            .kanji-header {
                margin-bottom: 20px;
                text-align: center;
            }

            .kanji-btns {
                display: flex;
                justify-content: center;
                gap: 20px;
                margin-bottom: 30px;
            }

            .kanji-btn {
                background-color: #17385a;
                color: white;
                text-decoration: none;
                padding: 15px 30px;
                border-radius: 25px;
                font-size: 16px;
                font-weight: bold;
                text-transform: uppercase;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                transition: all 0.3s ease;
                animation: fadeIn 1s ease;
            }

            .kanji-btn:hover {
                background-color: #17385a;
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
                transform: translateY(-5px);
            }

            .kanji-btn:active {
                transform: translateY(2px);
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .kanji-search {
                display: flex;
                gap: 20px;
                margin-bottom: 20px;
                justify-content: center;
            }

            .kanji-search input,
            .kanji-search select {
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ddd;
                background-color: white;
                color: #333;
                width: 200px;
                box-sizing: border-box;
            }

            .kanji-search button {
                padding: 10px 20px;
                background-color: #17385a;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .kanji-search button:hover {
                background-color: #17385a;
            }

            .kanji-list {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                justify-content: center;
                margin-top: 20px;
            }

            .kanji-item {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 24px;
                padding: 12px;
                background-color: #f9f9f9; 
                color: #333;
                border-radius: 5px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, background-color 0.3s ease;
                width: 80px;
                height: 80px;
                text-align: center;
                animation: zoomIn 0.5s ease;
            }

            .kanji-item:hover {
                transform: scale(1.1);
                background-color: #17385a;
            }

            .pagination {
                text-align: center;
                margin-top: 20px;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }

            @keyframes zoomIn {
                from {
                    transform: scale(0.8);
                }
                to {
                    transform: scale(1);
                }
            }
        </style>
    </x-slot>

    <main class="container mx-auto px-4 py-6">
        <div class="bg-white p-4 rounded shadow">
            <div class="kanji-btns">
                <a href="{{ route('quizzes.index') }}" class="kanji-btn">Kuis</a>
                <a href="{{ route('flashcard.index') }}" class="kanji-btn">Kartu Kilat</a>
                <a href="{{ route('writing.index') }}" class="kanji-btn">Menulis</a>
            </div>

            <div class="kanji-header">
                <form action="{{ route('users.index') }}" method="GET" class="kanji-search">
                    <input type="text" name="query" placeholder="Cari Kanji, Kunyomi, Onyomi, atau Arti" value="{{ old('query', $query) }}">

                    <select id="level" name="level" onchange="this.form.submit()">
                        <option value="N5" {{ $level == 'N5' ? 'selected' : '' }}>N5 (Pemula)</option>
                        <option value="N4" {{ $level == 'N4' ? 'selected' : '' }}>N4</option>
                        <option value="N3" {{ $level == 'N3' ? 'selected' : '' }}>N3</option>
                        <option value="N2" {{ $level == 'N2' ? 'selected' : '' }}>N2</option>
                        <option value="N1" {{ $level == 'N1' ? 'selected' : '' }}>N1 (Lanjutan)</option>
                    </select>

                    <button type="submit">Cari</button>
                </form>
            </div>

            <div class="kanji-list">
                @foreach($kanjis as $kanji)
                    <div class="kanji-item">
                        <a href="{{ route('admin.kanji.show', $kanji->id) }}">
                            {{ $kanji->kanji }}
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="pagination">
                {{ $kanjis->links() }}
            </div>
        </div>
    </main>

    @include('layouts.footer')
</x-app-layout>
