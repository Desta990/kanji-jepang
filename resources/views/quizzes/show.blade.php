<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <style>
        .question {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-8 bg-white shadow-xl rounded-lg">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-8">Kuis Kanji</h2>

        @if(session('error'))
            <div class="alert alert-danger bg-red-100 text-red-700 p-4 rounded-lg mb-4">{{ session('error') }}</div>
        @elseif(session('success'))
            <div class="alert alert-success bg-green-100 text-green-700 p-4 rounded-lg mb-4">{{ session('success') }}</div>
        @endif

        <form id="quizForm" action="{{ route('quizzes.store', $quiz->id) }}" method="POST">
            @csrf
            @foreach($quiz->questions as $index => $question)
                <div class="form-group question p-6 mb-6 bg-gray-100 rounded-lg shadow-md">
                    <p class="text-lg font-semibold text-gray-800">#{{ $index + 1 }}. {{ $question->question }}</p>
                    <div class="mt-4 space-y-3">
                        <label class="flex items-center">
                            <input type="radio" name="answers[{{ $question->id }}]" value="a" class="mr-2 text-gray-900"> {{ $question->option_a }}
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="answers[{{ $question->id }}]" value="b" class="mr-2 text-gray-900"> {{ $question->option_b }}
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="answers[{{ $question->id }}]" value="c" class="mr-2 text-gray-900"> {{ $question->option_c }}
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="answers[{{ $question->id }}]" value="d" class="mr-2 text-gray-900"> {{ $question->option_d }}
                        </label>
                    </div>
                </div>
            @endforeach

            <div class="flex justify-start space-x-4 mt-6">
                <button type="button" id="prevButton" class="btn btn-secondary bg-gray-900 text-white px-6 py-4 rounded-lg shadow-md" style="display: none;">Previous</button>
                <button type="button" id="nextButton" class="btn btn-primary bg-gray-900 text-white px-6 py-4 rounded-lg shadow-md">Next</button>
                <button type="submit" id="submitButton" class="btn btn-success bg-gray-900 text-white px-6 py-4 rounded-lg shadow-md" style="display: none;">Submit</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const questions = document.querySelectorAll('.question');
            const nextButton = document.getElementById('nextButton');
            const prevButton = document.getElementById('prevButton');
            const submitButton = document.getElementById('submitButton');
            let currentQuestionIndex = 0;

            function updateQuestionVisibility() {
                questions.forEach((question, index) => {
                    question.style.display = index === currentQuestionIndex ? 'block' : 'none';
                });

                prevButton.style.display = currentQuestionIndex > 0 ? 'inline-block' : 'none';
                nextButton.style.display = currentQuestionIndex < questions.length - 1 ? 'inline-block' : 'none';
                submitButton.style.display = currentQuestionIndex === questions.length - 1 ? 'inline-block' : 'none';
            }

            nextButton.addEventListener('click', () => {
                currentQuestionIndex++;
                updateQuestionVisibility();
            });

            prevButton.addEventListener('click', () => {
                currentQuestionIndex--;
                updateQuestionVisibility();
            });

            document.getElementById('quizForm').addEventListener('submit', function(event) {
                const unanswered = Array.from(questions).some((question, index) => {
                    if (index <= currentQuestionIndex) {
                        const inputs = question.querySelectorAll('input[type="radio"]:checked');
                        return inputs.length === 0;
                    }
                    return false;
                });

                if (unanswered) {
                    event.preventDefault();
                    alert('Harap jawab pertanyaan sebelum melanjutkan.');
                }
            });

            updateQuestionVisibility();
        });
    </script>
</body>
</html>
