<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/men', [WebController::class, 'men'])->name('men');
Route::get('/women', [WebController::class, 'women'])->name('women');
Route::get('/aboutus', [WebController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [WebController::class, 'contactus'])->name('contactus');
Route::get('/register', [WebController::class, 'register'])->name('register');
Route::get('/form', [WebController::class, 'form'])->name('form');
Route::get('/description', [WebController::class, 'description'])->name('description');
Route::get('/admin', [WebController::class, 'admin'])->name('admin');

Route::get('/create', [WebController::class, 'create'])->name('create');
Route::post('/store', [WebController::class, 'store'])->name('store');
Route::get('web/{id}/edit',[WebController::class, 'edit']);


Route::put('web/{id}/update',[WebController::class, 'update']);
Route::delete('products/{id}/delete',[WebController::class, 'destroy']);

Route::get('products/{id}/show',[WebController::class, 'show']);









Route::resource('products', WebController::class);


    

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__ .'/auth.php';