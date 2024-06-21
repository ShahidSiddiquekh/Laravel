<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/main', [RegistrationController::class, 'index'])->name('main');

Route::redirect('/', '/main');

Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    require __DIR__.'/auth.php';
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

Route::get('/form', [RegistrationController::class, 'index'])->name('register123');

Route::get('/login', function () {
    return view('login');
});
Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get('/orders', function () {
    return view('orders');
})->name('orders');
