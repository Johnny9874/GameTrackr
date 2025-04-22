<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jeu;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Backlog extends Model
{
    use HasFactory;

    // Champs pouvant être remplis en masse (mass assignment)
    protected $fillable = ['utilisateur_id', 'jeu_id', 'statut'];

    // Relation : un backlog appartient à un utilisateur
    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }

    // Relation : un backlog appartient à un jeu
    public function jeu()
    {
        return $this->belongsTo(Jeu::class);
    }
}
