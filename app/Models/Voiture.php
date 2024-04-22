<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = ['matricule', 'modele', 'nombre_de_place', 'disponible', 'tarif', 'idagence'];

}
