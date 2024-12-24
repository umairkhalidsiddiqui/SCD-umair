<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;





Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/men', [WebController::class, 'men'])->name('men');
Route::get('/women', [WebController::class, 'women'])->name('women');
Route::get('/aboutus', [WebController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [WebController::class, 'contactus'])->name('contactus');
Route::get('/register', [WebController::class, 'register'])->name('register');
Route::get('/form', [WebController::class, 'form'])->name('form');
Route::get('/description', [WebController::class, 'description'])->name('description');


Route::get('/admin', [productController::class, 'admin'])->name('admin');
Route::get('/create', [productController::class, 'create'])->name('create');
Route::post('/store', [productController::class, 'store'])->name('store');
Route::get('web/{id}/edit',[productController::class, 'edit']);
Route::put('web/{id}/update',[productController::class, 'update']);
Route::delete('products/{id}/delete',[productController::class, 'destroy']);
Route::get('products/{id}/show',[productController::class, 'show']);
Route::resource('products', productController::class);


Route::post('/reviews', [ReviewController::class, 'store'])->middleware('auth')->name('reviews.store');
Route::get('/products/{product}/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

Route::get('/search', [SearchController::class, 'filter'])->name('search.filter');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__ .'/auth.php';