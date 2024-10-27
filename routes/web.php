<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/quiz/create', [QuizController::class, 'create'])->name('quiz.create');
    Route::post('/quiz/store', [QuizController::class, 'store'])->name('quiz.store');
});



Route::get('/adminpage',[AdminDashboardController::class, 'page'])->middleware('admin');
Route::get('/home',[HomeController::class, 'home'])->middleware('user');




require __DIR__.'/auth.php';
