<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class music extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'categorie',
        'description',
        'image',
    ];
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
