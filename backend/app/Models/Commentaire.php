<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Commentaire extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'commentaires';

    protected $fillable = [
        'utilisateur_id',
        'jeu_id',
        'contenu',
        'note',
        'date_commentaire'
    ];
}
