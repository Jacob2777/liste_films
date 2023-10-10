<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function show($id)
    {
        // Récupérer les informations du film à partir de l'id
        $film = Film::find($id);

        // Vérifier si le film existe dans la base de données
        if (!$film) {
            abort(404); // Afficher une page 404 si le film n'est pas trouvé
        }

        // Passer les informations du film à la vue
        return view('films.show', [
            "film" => $film // Retourne le film en fonction de l'id sélectionné
        ]);
    }
}
