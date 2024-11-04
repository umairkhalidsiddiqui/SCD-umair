<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/men', [WebController::class, 'men'])->name('men');
Route::get('/women', [WebController::class, 'women'])->name('women');
Route::get('/aboutus', [WebController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [WebController::class, 'contactus'])->name('contactus');
Route::get('/register', [WebController::class, 'register'])->name('register');
Route::get('/form', [WebController::class, 'form'])->name('form');
    

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__ .'/auth.php';