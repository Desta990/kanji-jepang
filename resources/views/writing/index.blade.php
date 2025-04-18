<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <h1 class="text-center text-2xl font-semibold mb-8">Mode Menulis</h1>

            <div id="writing-container" class="flex justify-center items-center">
                <div id="question-card" class="card p-6 bg-gray shadow-md rounded-lg">
                    <h2 id="kanji-character" class="text-4xl font-bold text-gray-900 mb-4"></h2>
                    <p class="mb-4 text-gray-700">Masukkan arti dari kanji ini:</p>
                    <input type="text" id="user-answer" class="form-control text-center border-2 rounded-lg py-2 px-4 mb-4" placeholder="Tulis jawaban di sini">
                    <button id="submit-answer" class="btn btn-outline-primary w-full py-2 mb-4">Submit Jawaban</button>
                </div>
            </div>

            <div id="feedback" class="mt-3 text-center" style="display: none;">
                <p id="feedback-message" class="text-lg"></p>
            </div>

            <div class="mt-4 text-center">
                <button id="next-question" class="btn btn-success py-2 px-6 bg-green-500 text-white rounded-lg hover:bg-green-600" style="display: none;">Soal Berikutnya</button>
                <a id="back-to-writing" href="{{ route('writing.index') }}" class="btn btn-outline-primary py-2 px-6 w-full text-center mt-4" style="display: none;">Kembali ke Halaman Menulis</a>
            </div>

            <div class="mt-4 text-center">
                <p id="progress" class="text-gray-500"></p>
            </div>
        </div>

        <script>
          
            const kanjis = @json($kanjis).sort(() => Math.random() - 0.5); 
            let currentIndex = 0;
            let correctAnswers = 0;

            const kanjiCharacter = document.getElementById("kanji-character");
            const userAnswer = document.getElementById("user-answer");
            const submitAnswerButton = document.getElementById("submit-answer");
            const feedback = document.getElementById("feedback");
            const feedbackMessage = document.getElementById("feedback-message");
            const nextQuestionButton = document.getElementById("next-question");
            const backToWritingButton = document.getElementById("back-to-writing");
            const progress = document.getElementById("progress");

            function loadQuestion(index) {
                if (index >= kanjis.length) {
                    document.getElementById("writing-container").innerHTML = `
                        <h3 class="text-success text-lg">Selesai! Anda menjawab ${correctAnswers} dari ${kanjis.length} soal dengan benar.</h3>
                    `;
                    nextQuestionButton.style.display = "none";  // Disable next question button
                    backToWritingButton.style.display = "inline-block";  // Enable back to writing button
                    return;
                }

                kanjiCharacter.textContent = kanjis[index].kanji;
                userAnswer.value = "";
                feedback.style.display = "none";
                nextQuestionButton.style.display = "none";
                progress.textContent = `Soal: ${index + 1}/${kanjis.length}`;
            }

            submitAnswerButton.addEventListener("click", () => {
                const correctAnswer = [kanjis[currentIndex].arti.toLowerCase()];
                const userInput = userAnswer.value.trim().toLowerCase();

                if (userInput === "") {
                    feedbackMessage.textContent = "Isilah jawabannya!";
                    feedbackMessage.classList = "text-orange-500 font-semibold";
                    nextQuestionButton.style.display = "none";  // Disable the next question button if the answer is empty
                } else if (correctAnswer.includes(userInput)) {
                    feedbackMessage.textContent = "Jawaban Anda benar!";
                    feedbackMessage.classList = "text-green-500 font-semibold";
                    correctAnswers++;
                    nextQuestionButton.style.display = "inline-block";  // Enable the next question button if the answer is correct
                } else {
                    feedbackMessage.textContent = `Jawaban salah! Jawaban yang benar: ${correctAnswer[0]}`;
                    feedbackMessage.classList = "text-red-500 font-semibold";
                    nextQuestionButton.style.display = "inline-block";  // Enable the next question button if the answer is wrong
                }

                feedback.style.display = "block";
            });

            nextQuestionButton.addEventListener("click", () => {
                currentIndex++;
                loadQuestion(currentIndex);
            });

            loadQuestion(currentIndex);
        </script>
    </x-slot>

    @include('layouts.footer')

</x-app-layout>

<style>
    body {
        background-color: #f7fafc;
        font-family: 'Arial', sans-serif;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 2rem;
    }

    .card {
        width: 100%;
        padding: 2rem;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .card h2 {
        font-size: 3rem;
        color: #0d2836;
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 0.8rem;
        font-size: 1.1rem;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .form-control:focus {
        outline: none;
        border-color: #111e43;
    }

    .btn {
        display: block;
        width: 100%;
        padding: 0.8rem;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        border-radius: 5px;
    }

    .btn:hover {
        transform: scale(1.05);
    }

    .btn-outline-primary {
        border: 2px solid #121f44;
        color: #1a2a54;
    }

    .btn-outline-primary:hover {
        background-color: #1b2d5e;
        color: white;
    }

    .btn-success {
        background-color: #10b981;
        border-color: #10b981;
    }

    .btn-success:hover {
        background-color: #16a34a;
    }

    #feedback-message {
        font-size: 1.2rem;
        font-weight: bold;
    }

    #progress {
        font-size: 1.1rem;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .card h2 {
            font-size: 2.5rem;
        }

        .form-control {
            font-size: 1rem;
        }

        .btn {
            padding: 0.7rem;
        }
    }
</style>
