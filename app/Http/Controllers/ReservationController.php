<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\music;
use App\Models\Reservation;
use App\Models\salles;
use App\Models\traiteur;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function calendar(){
        // $clients=Client::all();
        $music=music::all();
        $traiteur=traiteur::all();
        $salles=salles::all();
        return view('reservation', compact( 'salles', 'musics', 'traiteurs'));
    }
    public function store(Request $request)
    {
        // Récupérer l'ID du morceau de musique spécifié
        $music_id = $request->input('music_id');
    
        // Récupérer les dates de début et de fin à partir de la session ou d'autres sources
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date'); // Récupérer la date de fin
    
        // Créer une nouvelle réservation
        $reservation = new Reservation();
        $reservation->music_id = $music_id;
        $reservation->start_date = $start_date;
        $reservation->end_date = $end_date;
    
        // Enregistrer la réservation dans la base de données
        $reservation->save();
    
        // Rediriger l'utilisateur ou retourner une réponse appropriée
        return redirect()->back()->with('success', 'Réservation créée avec succès.');
    }
    
    
    
}
