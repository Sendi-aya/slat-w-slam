<?php

namespace App\Http\Controllers;

use App\Models\music;
use App\Models\salles;
use App\Models\traiteur;
use Illuminate\Http\Request;

class SallesController extends Controller
{
    public function index()
    {
        $salles = Salles::all();
        $musics =music::all();
        $traiteur =traiteur::all();
        
        return view('reservation', compact('salles', 'musics','traiteur'));
    }
   
}
