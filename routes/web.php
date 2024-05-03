<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToyController;

Route::get('/', function () {
    return view('welcome');
});



// Route::resource('show', ToyController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('toy',ToyController::class);
    Route::get('/toy/edit/{toy}',[ToyController::class,'edit'])-> name('toy.edit');
    Route::get('/toy/{id}',[ToyController::class,'show'])-> name('toy.show');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

