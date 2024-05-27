<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'salle_id',
        'music_id',
        'traiteur_id',
        'start_date',
        'end_date',
        'billed',
    ];
    public function salles(){
        return $this->belongsTo(salles::class);
    }
    public function music(){
        return $this->belongsTo(music::class);
    }
    public function traiteurs(){
        return $this->belongsTo((traiteur::class));
    }
    
}
