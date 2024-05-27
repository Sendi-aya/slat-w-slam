<?php

namespace App\Http\Controllers;

use App\Models\salles;
use Illuminate\Http\Request;
use App\Models\Salle;
use App\Models\Music;
use App\Models\Traiteur;

class ServicesController extends Controller
{
    public function index()
    {
        $salles =salles::all();
        $musics = Music::all();
        $traiteurs = Traiteur::all();

        return view('services', compact('salles', 'musics', 'traiteurs'));
    }

    public function getSalles()
    {
        $salles = salles::all();
        return response()->json($salles);
    }

    public function getMusic()
    {
        $musics = Music::all();
        return response()->json($musics);
    }

    public function getTraiteur()
    {
        $traiteurs = Traiteur::all();
        return response()->json($traiteurs);
    }

    public function product_detail($id){
        $salles = salles::find($id);
        return view('product_detail', compact('salles'));
    }
    public function music_detail($id) {
        $music = Music::find($id);
        return view('music_detail', compact('music'));
    }
//     public function getMusicDetails(Request $request, $id)
// {
//     $music = Music::find($id);

//     // Vérifier si la musique existe
//     if (!$music) {
//         return response()->json(['error' => 'Musique non trouvée'], 404);
//     }

//     return response()->json([
//         'nom' => $music->nom,
//         'prix' => $music->prix,
//         // Ajoutez d'autres détails de musique si nécessaire
//     ]);
// }
    public function traiteur_detail($id) {
        $traiteur = Traiteur::find($id);
        return view('traiteur_detail', compact('traiteur'));
    }
}
