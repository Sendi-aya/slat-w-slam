<?php

namespace App\Http\Controllers;

use App\Models\music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index(Request $request)
    {
        // Récupérer les détails de la musique en fonction de la date sélectionnée
        // Simulez cette récupération de données pour l'instant
        $day = $request->day;
        $month = $request->month;
        $year = $request->year;

        // Par exemple, récupérer les détails de la musique correspondant à cette date
        $music = Music::where('date', '=', "$year-$month-$day")->first();

        // Envoyer les détails de la musique à la vue
        if ($music) {
            return response()->json(['success' => true, 'music' => $music]);
        } else {
            return response()->json(['success' => false]);
        }
    }
}
