<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class AccueilController extends Controller
{
    public function index()
    {
        $films = Film::all(); // Récupère tous les films de la base de données

        // Retourne la vue 'films.index' en passant la variable $films à la vue
        return view('films.index', [
            "films" => $films // Utilisation de la variable $films (au pluriel) dans le tableau associatif
        ]);
    }
}
