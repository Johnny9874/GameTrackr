<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Commentaire extends Model
{
    // Connexion à la base MongoDB (définie dans config/database.php)
    protected $connection = 'mongodb';

    // Nom de la collection utilisée
    protected $collection = 'commentaires';

    // Champs autorisés à être remplis automatiquement
    protected $fillable = [
        'utilisateur_id',       // ID de l'utilisateur qui commente
        'jeu_id',               // ID du jeu concerné
        'contenu',              // Contenu du commentaire
        'note',                 // Note donnée au jeu
        'date_commentaire'      // Date du commentaire
    ];
}
