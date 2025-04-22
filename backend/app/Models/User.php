<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Backlog;

class User extends Authenticatable {
    
    use HasFactory, Notifiable;

    /**
     * Les attributs qui peuvent être assignés en masse.
     * (Utilisés lors de la création ou mise à jour d'un utilisateur)
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Les attributs masqués dans les réponses JSON.
     * (Par sécurité, le mot de passe et le token de session ne doivent pas être exposés)
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Les types de données à caster automatiquement.
     * - Le champ `email_verified_at` est casté en DateTime
     * - Le mot de passe est automatiquement hashé
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    /**
     * Relation : un utilisateur peut avoir plusieurs jeux dans son backlog.
     */
    public function backlogs() {
        return $this->hasMany(Backlog::class);
    }
}
