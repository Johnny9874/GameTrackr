<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class GameSession extends Model
{
    // Connexion à la base MongoDB définie dans config/database.php
    protected $connection = 'mongodb';

    // Nom de la collection MongoDB
    protected $collection = 'sessions';

    // Attributs autorisés à être remplis lors d'une création ou mise à jour
    protected $fillable = [
        'utilisateur_id',       // ID de l'utilisateur qui a joué
        'jeu_id',               // ID du jeu concerné
        'duree',                // Durée de la session en minutes
        'date_session'          // Date à laquelle la session a eu lieu
    ];
}




