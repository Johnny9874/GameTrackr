<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Log extends Model
{
    // Utilise la connexion MongoDB définie dans config/database.php
    protected $connection = 'mongodb';

    // Spécifie le nom de la collection MongoDB utilisée
    protected $collection = 'logs';

    // Attributs que l'on peut remplir automatiquement (mass assignment)
    protected $fillable = [
        'utilisateur_id',   // ID de l'utilisateur ayant effectué l'action
        'action',           // Type d'action effectuée (ex : "ajout", "suppression", "modification")
        'description',      // Détail complémentaire sur l'action
        'date_log'          // Date de l'action (format ISO ou datetime Mongo)
    ];
}
