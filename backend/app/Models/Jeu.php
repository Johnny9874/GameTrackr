<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Genre;
use App\Models\Plateforme;
use App\Models\Backlog;

class Jeu extends Model
{

    protected $table = 'jeux';

    protected $fillable = [
        'titre',
        'temps_estime',
        'prix_achat',
        'date_achat',
        'utilisateur_id'
    ];

    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function plateformes()
    {
        return $this->belongsToMany(Plateforme::class);
    }

    public function backlog()
    {
        return $this->hasOne(Backlog::class);
    }
}