<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    public function rendezVousPage()
    {
        return view('rendezv'); // Cela renvoie à la vue 'rendez_vous.blade.php'
    }
}
