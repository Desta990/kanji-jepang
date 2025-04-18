<?php
namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kanji;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\UserQuizProgress;
use Illuminate\Support\Facades\Auth;
use App\Models\Badge;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        // Ambil Semua Data Quiz
        $search = $request->get('search');
        
    //ambil semua Quiz 
        $quizzes = Quiz::when($search, function ($query, $search) {
            return $query->where('level', 'LIKE', "%$search%");
        })->get();
        
        // Ambil hasil kuis pengguna berdasarkan quiz_id dan user_id
        $userResults = UserQuizProgress::where('user_id', auth()->id())
            ->whereIn('quiz_id', $quizzes->pluck('id'))
            ->get()
            ->keyBy('quiz_id');
        
        // Kembalikan view dengan kuis dan hasil yang sudah diambil
        return view('quizzes.index', compact('quizzes', 'userResults'));
    }
    
    public function show(Quiz $quiz)
    {
        // Pastikan user telah menyelesaikan kuis sebelumnya dengan nilai yang cukup
        $previousQuiz = Quiz::where('id', '<', $quiz->id)->latest()->first();
        if ($previousQuiz) {
            $progress = UserQuizProgress::where('user_id', auth()->id())
                ->where('quiz_id', $previousQuiz->id)
                ->first();
            if (!$progress || $progress->score < $previousQuiz->required_score) {
                return redirect()->route('quizzes.index')->with('error', 'Level sebelumnya belum diselesaikan dengan skor yang cukup.');
            }
        }
    
        // Cek apakah waktu sudah dihitung untuk kuis yang sedang berlangsung
        $userProgress = UserQuizProgress::where('user_id', auth()->id())
            ->where('quiz_id', $quiz->id)
            ->first();
    
        // Jika kuis sudah selesai, jangan mulai hitung waktu lagi
        if ($userProgress) {
            // Kirimkan data progres yang ada tanpa menghitung waktu lagi
            return view('quizzes.show', compact('quiz', 'userProgress'));
        } else {
            // Jika kuis belum dikerjakan, mulai hitung waktu
            session(['quiz_start_time' => time()]);
            return view('quizzes.show', compact('quiz'));
        }
    }
    
    

    
    public function store(Request $request, Quiz $quiz)
{
 
        // Ambil semua ID pertanyaan dari quiz ini
        $questionIds = $quiz->questions->pluck('id')->toArray();
        
        // Cek jika semua pertanyaan terisi
        $answers = $request->input('answers');
        foreach ($questionIds as $questionId) {
            if (!isset($answers[$questionId]) || $answers[$questionId] === null) {
                // Redirect kembali jika ada pertanyaan yang belum dijawab
                return redirect()->route('quizzes.show', $quiz->id)
                    ->with('error', 'Harap isi semua pertanyaan sebelum mengirim kuis.');
            }
        }
    
        $score = 0;
        $startTime = session('quiz_start_time');
        $elapsedTime = time() - $startTime;
    
        if ($elapsedTime > $quiz->duration * 60) {
            return redirect()->route('quizzes.index')->with('error', 'Waktu untuk mengerjakan kuis telah habis.');
        }
    
        // Hitung skor
        foreach ($answers as $questionId => $answer) {
            $question = Question::find($questionId);
            if ($question && $question->correct_answer === $answer) {
                $score += $question->score;
            }
        }
    
        UserQuizProgress::updateOrCreate(
            ['user_id' => auth()->id(), 'quiz_id' => $quiz->id],
            ['score' => $score, 'time_taken' => $elapsedTime]
        );
    
        return redirect()->route('quizzes.index')->with([
            'success' => 'Kuis selesai! Anda lulus dengan skor: ' . $score,
            'result' => [
                'quiz_id' => $quiz->id,
                'score' => $score,
                'time_taken' => gmdate("i:s", $elapsedTime),
                'status' => $score >= $quiz->required_score ? 'Lulus' : 'Belum Lulus'
            ]
        ]);
    }
}
    