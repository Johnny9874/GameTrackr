<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class GameSession extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'sessions';

    protected $fillable = [
        'utilisateur_id',
        'jeu_id',
        'duree',
        'date_session'
    ];
}




