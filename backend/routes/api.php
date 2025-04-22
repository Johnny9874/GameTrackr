<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Importation des contrôleurs utilisés
use App\Http\Controllers\JeuController;
use App\Http\Controllers\BacklogController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\LogController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Ce fichier contient toutes les routes accessibles via l’API REST
| pour l’application GameTrackr. Ces routes sont séparées par domaine :
| Jeux, Backlogs, Sessions de jeu, Commentaires, Logs.
*/

/* ===============================
   ROUTES POUR LES JEUX (MySQL)
================================ */

// Liste tous les jeux
Route::get('/jeux', [JeuController::class, 'index']);

// Affiche un jeu spécifique par ID
Route::get('/jeux/{id}', [JeuController::class, 'show']);

// Crée un nouveau jeu
Route::post('/jeux', [JeuController::class, 'store']);

// Met à jour un jeu existant
Route::put('/jeux/{id}', [JeuController::class, 'update']);

// Supprime un jeu
Route::delete('/jeux/{id}', [JeuController::class, 'delete']);


/* ===============================
   ROUTES POUR LE BACKLOG (MySQL)
================================ */

// Ajoute un jeu au backlog de l’utilisateur
Route::post('/backlog', [BacklogController::class, 'store']);

// Supprime un jeu du backlog
Route::delete('/backlog/{id}', [BacklogController::class, 'destroy']);

// Modifie le statut d’un jeu dans le backlog
Route::put('/backlog/{id}/statut', [BacklogController::class, 'updateStatut']);

// Récupère le backlog complet d’un utilisateur
Route::get('/utilisateurs/{id}/backlog', [BacklogController::class, 'showByUser']);

// Modifie un backlog précis d'un utilisateur 
Route::put('/utilisateurs/{id}/backlog', [BacklogController::class, 'updateStatut']);

// Filtre les jeux d’un utilisateur par statut (en cours, terminé, etc.)
Route::get('/utilisateurs/{id}/backlog/statut/{statut}', [BacklogController::class, 'filtrerParStatut']);

// Récupère les jeux associés à un utilisateur (via backlog)
Route::get('/utilisateurs/{id}/jeux', [JeuController::class, 'jeuxParUtilisateur']);


/* ======================================
   ROUTES POUR LES SESSIONS DE JEU (MongoDB)
======================================== */

// Enregistre une session de jeu
Route::post('/sessions', [SessionController::class, 'store']);

// Liste toutes les sessions enregistrées
Route::get('/sessions', [SessionController::class, 'index']);


/* =====================================
   ROUTES POUR LES COMMENTAIRES (MongoDB)
====================================== */

// Liste tous les commentaires
Route::get('/commentaires', [CommentaireController::class, 'index']);

// Ajoute un commentaire à un jeu
Route::post('/commentaires', [CommentaireController::class, 'store']);

/* ==============================
   ROUTES POUR LES LOGS (MongoDB)
=============================== */

// Liste tous les logs
Route::get('/logs', [LogController::class, 'index']);

// Enregistre une nouvelle action (log)
Route::post('/logs', [LogController::class, 'store']);