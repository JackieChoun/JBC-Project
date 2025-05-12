<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\{ IndexController, RealisationController, PrestationController, ContactController, ClientController };

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/realisations', [RealisationController::class, 'index'])->name('realisation');
Route::get('/prestations', [PrestationController::class, 'index'])->name('prestation');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/client', [ClientController::class, 'index'])->name('client');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
