<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\ProfileController;

// Rotta per la pagina di benvenuto
Route::get('/', function () {
    return view('welcome');
});


// Rotte per le funzionalità protette da autenticazione
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [ProjectController::class, 'index'])->name('dashboard');
    Route::resource('project', ProjectController::class);
    Route::resource('technology', TechnologyController::class);
});

// Rotte per il profilo utente
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include le rotte di autenticazione generate da Breeze
require __DIR__ . '/auth.php';
