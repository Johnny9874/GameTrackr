<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jeu;
use App\Models\User;

class Backlog extends Model
{
    use HasFactory;

    protected $fillable = ['utilisateur_id', 'jeu_id', 'statut'];

    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }

    public function jeu()
    {
        return $this->belongsTo(Jeu::class);
    }
}
