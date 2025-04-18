<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KanjiController;
use App\Http\Controllers\UserKanjiController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Quiz\QuizController;
use App\Http\Controllers\Admin\UserQuizProgressController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FlashcardController;
use App\Http\Controllers\WritingController;
use App\Http\Controllers\BlogController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/









Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/post/{id}', [BlogController::class, 'show'])->name('blog.show');


Route::middleware(['auth'])->group(function () {
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
    Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show')->middleware('quiz.access');
    Route::post('/quizzes/{quiz}', [QuizController::class, 'store'])->name('quizzes.store');
    
});


Route::get('/writing', [WritingController::class, 'index'])->name('writing.index');



Route::get('/flashcard', [FlashcardController::class, 'index'])->name('flashcard.index');
Route::get('/flashcard{level}', [FlashcardController::class, 'show'])->name('flashcard.show');



Route::get('/index', [UserKanjiController::class, 'index'])->name('users.index');


Route::get('/', function () {
    return view('welcome'); 
})->name('home');

Route::get('/about', function () {
    return view('about'); 
})->name('about');



Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');




Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    
  
    Route::resource('kanji', KanjiController::class);

    Route::get('/user-quiz-progress', [UserQuizProgressController::class, 'index'])->name('user-quiz.index');

   
    Route::get('/activity-log', [ActivityLogController::class, 'index'])->name('activity-log.index');
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware('role:user')->group(function () {
        Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard'); 
    });
});


Route::middleware(['auth'])->group(function () {
    Route::get('/user-quiz-progress', [UserQuizProgressController::class, 'index'])->name('user.quiz-progress');
    Route::get('/kanji', [KanjiController::class, 'index'])->name('kanji.index');
    Route::get('/activity-log', [ActivityLogController::class, 'index'])->name('activity-log.index');
});



Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
