<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jeu;

class Genre extends Model
{
    protected $fillable = ['nom'];

    public function jeux()
    {
        return $this->belongsToMany(Jeu::class);
    }
}
