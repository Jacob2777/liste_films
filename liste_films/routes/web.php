<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController; // Importation du contrôleur AccueilController
use App\Http\Controllers\FilmController;   // Importation du contrôleur ListeController

// Route vers l'accueil
Route::get('/', [AccueilController::class, 'index'])
    ->name('accueil.index');

// Route vers la page d'un film
Route::get('/film/{id}', [FilmController::class, 'show'])
    ->name('film.show');