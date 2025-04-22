<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jeu;

class Genre extends Model
{
    // Attributs que l'on peut remplir en masse (mass assignment)
    protected $fillable = ['nom'];  // Le nom du genre (ex : Action, RPG, etc.)

    // --- Relations ---

    // Un genre peut être associé à plusieurs jeux (relation many-to-many)
    public function jeux()
    {
        return $this->belongsToMany(Jeu::class);
    }
}
