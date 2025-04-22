<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jeu;

class Plateforme extends Model
{
    // Autorise le remplissage du champ 'nom' lors des insertions en masse
    protected $fillable = ['nom'];

    /**
     * Relation Many-to-Many avec le modèle Jeu.
     * Une plateforme peut accueillir plusieurs jeux,
     * et un jeu peut être disponible sur plusieurs plateformes.
     */
    public function jeux()
    {
        return $this->belongsToMany(Jeu::class);
    }
}
