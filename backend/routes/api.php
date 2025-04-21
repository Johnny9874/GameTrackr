<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;
use App\Http\Controllers\BacklogController;
use App\Http\Controllers\SessionController;
// --- Jeux ---
Route::get('/jeux', [JeuController::class, 'index']);
Route::get('/jeux/{id}', [JeuController::class, 'show']);
Route::post('/jeux', [JeuController::class, 'store']);
Route::put('/jeux/{id}', [JeuController::class, 'update']);
Route::delete('/jeux/{id}', [JeuController::class, 'delete']);

// --- Backlogs ---
Route::post('/backlog', [BacklogController::class, 'store']);
Route::delete('/backlog/{id}', [BacklogController::class, 'destroy']);
Route::put('/backlog/{id}/statut', [BacklogController::class, 'updateStatut']);
Route::get('/utilisateurs/{id}/backlog', [BacklogController::class, 'showByUser']);
Route::put('/utilisateurs/{id}/backlog', [BacklogController::class, 'updateStatut']);

// --- Jeux par utilisateur ---
Route::get('/utilisateurs/{id}/backlog/statut/{statut}', [BacklogController::class, 'filtrerParStatut']);
Route::get('/utilisateurs/{id}/jeux', [JeuController::class, 'jeuxParUtilisateur']);


Route::post('/sessions', [SessionController::class, 'store']);
Route::get('/sessions', [SessionController::class, 'index']);