<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Genre;
use App\Models\Plateforme;
use App\Models\Backlog;

class Jeu extends Model
{
    // Nom de la table SQL associée au modèle
    protected $table = 'jeux';

    // Attributs que l'on peut remplir en masse (mass assignment)
    protected $fillable = [
        'titre',            // Titre du jeu
        'temps_estime',     // Durée estimée pour finir le jeu
        'prix_achat',       // Prix payé pour le jeu
        'date_achat',       // Date d’achat du jeu
        'utilisateur_id'    // Clé étrangère vers l’utilisateur propriétaire
    ];


    // --- Relations ---

    // Chaque jeu appartient à un utilisateur
    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }

    // Un jeu peut appartenir à plusieurs genres (relation many-to-many)
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    // Un jeu peut être disponible sur plusieurs plateformes (relation many-to-many)
    public function plateformes()
    {
        return $this->belongsToMany(Plateforme::class);
    }

    // Un jeu peut apparaître dans plusieurs lignes de backlog
    public function backlogs()
    {
        return $this->hasMany(Backlog::class);
    }
}