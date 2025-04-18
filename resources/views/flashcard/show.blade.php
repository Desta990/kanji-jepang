<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-center text-4xl md:text-5xl font-bold my-6 text-gray-800 tracking-wide animate-fadeInDown">
                Kuis Kanji - Level {{ strtoupper($level) }}
            </h1>

            <!-- Flashcard Section -->
            <div id="flashcard-container" class="flex flex-col lg:flex-row justify-center items-center mt-10 gap-12">
                <div id="flashcard" class="w-80 h-80 md:w-96 md:h-96 flex justify-center items-center p-6 shadow-xl bg-gradient-to-r from-gray-900 to-gray-900 text-white rounded-2xl transform transition hover:scale-105">
                    <div>
                        <h2 id="kanji-character" class="text-center text-9xl font-bold mb-6"></h2>
                        <div class="text-center text-lg font-medium mb-2" id="kanji-group"></div>
                    </div>
                </div>

                <!-- Answer Options -->
                <div id="answer-options" class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-lg">
                </div>
            </div>

            <!-- Next Button -->
            <div class="text-center mt-12">
                <button id="next-button" 
                        class="bg-gray-900 text-white font-bold px-10 py-4 rounded-full hover:bg-gray-900 shadow-lg transition focus:outline-none focus:ring-4 focus:ring-gray-400" 
                        onclick="nextQuestion()" disabled>
                    Selanjutnya
                </button>
            </div>

            <!-- Return Button -->
            <div id="return-button-container" class="text-center mt-12" style="display: none;">
                <a href="{{ route('flashcard.index') }}" class="bg-gray-900 text-white font-bold px-10 py-4 rounded-full hover:bg-gray-600 shadow-lg transition focus:outline-none focus:ring-4 focus:ring-gray-400">
                    Kembali ke Halaman Flashcard
                </a>
            </div>
        </div>
    </x-slot>

    <script>
        let currentIndex = 0;
        let correctCount = 0;
        let incorrectCount = 0;
        const kanjis = @json($kanjis);
        const answerOptions = document.getElementById("answer-options");

        function loadQuestion(index) {
            if (index >= kanjis.length) {
                // Display the end of quiz message and results
                document.getElementById("flashcard-container").innerHTML = `
                    <div class="text-center text-3xl font-bold text-gray-800">
                        <h3 class="text-green-600 animate-bounce">🎉 Selesai!</h3>
                        <p class="mt-4">Anda menjawab benar <span class="font-bold text-green-600">${correctCount}</span> dari <span class="font-bold text-green-600">${kanjis.length}</span> kanji.</p>
                        <p class="mt-4">Jawaban Salah: <span class="font-bold text-red-600">${incorrectCount}</span></p>
                    </div>
                `;
                answerOptions.innerHTML = "";
                document.getElementById("next-button").style.display = "none";
                document.getElementById("return-button-container").style.display = "block";
                return;
            }

            const currentKanji = kanjis[index];
            document.getElementById("kanji-character").textContent = currentKanji.kanji;
            document.getElementById("kanji-group").textContent = currentKanji.group || ''; // Display group if available

            loadAnswerOptions(index);
            updateCounts();
        }

        function loadAnswerOptions(index) {
            const correctAnswer = kanjis[index].arti;
            const options = [...kanjis]
                .filter(k => k.id !== kanjis[index].id)
                .sort(() => Math.random() - 0.5)
                .slice(0, 7) // Get 7 random answers
                .map(kanji => kanji.arti);
            options.push(correctAnswer);
            options.sort(() => Math.random() - 0.5);

            answerOptions.innerHTML = "";
            options.forEach(option => {
                const button = document.createElement("button");
                button.textContent = option;
                button.classList.add("bg-gray-200", "text-gray-800", "px-4", "py-3", "rounded-xl", "font-medium", "hover:bg-blue-500", "hover:text-white", "transition", "shadow-md", "focus:outline-none", "focus:ring-4", "focus:ring-blue-300");
                button.addEventListener("click", () => checkAnswer(option, correctAnswer, button));
                answerOptions.appendChild(button);
            });
        }

        function checkAnswer(selected, correct, button) {
            if (selected === correct) {
                correctCount++;
                button.classList.add("bg-green-900", "text-white");
            } else {
                incorrectCount++;
                button.classList.add("bg-red-500", "text-white");
            }

            // Disable all buttons after selecting an answer
            const allButtons = document.querySelectorAll("#answer-options button");
            allButtons.forEach(btn => btn.disabled = true);

            // Enable the "Next" button
            document.getElementById("next-button").disabled = false;

            updateCounts();
        }

        function nextQuestion() {
            // Increase the current index and load the next question
            currentIndex++;

            if (currentIndex < kanjis.length) {
                loadQuestion(currentIndex);
            } else {
                // End of quiz message
                document.getElementById("flashcard-container").innerHTML = `
                    <div class="text-center text-3xl font-bold text-gray-800">
                        <h3 class="text-green-600 animate-bounce">🎉 Selesai!</h3>
                        <p class="mt-4">Anda menjawab benar <span class="font-bold text-green-600">${correctCount}</span> dari <span class="font-bold text-green-600">${kanjis.length}</span> kanji.</p>
                        <p class="mt-4">Jawaban Salah: <span class="font-bold text-red-600">${incorrectCount}</span></p>
                    </div>
                `;
                answerOptions.innerHTML = "";
                document.getElementById("next-button").style.display = "none";
                document.getElementById("return-button-container").style.display = "block";
            }

            // Disable the "Next" button until the next answer is chosen
            document.getElementById("next-button").disabled = true;
        }

        function updateCounts() {
            document.getElementById("correct-count").children[1].textContent = correctCount;
            document.getElementById("incorrect-count").children[1].textContent = incorrectCount;
            document.getElementById("remaining-count").children[1].textContent = kanjis.length - (currentIndex + 1);
        }

        loadQuestion(currentIndex);
    </script>

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
            animation: fadeInDown 0.8s ease-out;
        }

        .shadow-xl {
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.15);
        }
    </style>
</x-app-layout>
