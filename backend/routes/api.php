<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;
use App\Http\Controllers\BacklogController;

Route::get('/jeux', [JeuController::class, 'index']);
Route::get('/jeux/{id}', [JeuController::class, 'show']);
Route::get('/utilisateurs/{id}/jeux', [JeuController::class, 'jeuxParUtilisateur']);
Route::post('/jeux', [JeuController::class, 'store']);
Route::post('/backlog', [BacklogController::class, 'store']);
Route::put('jeux/{id}', [JeuController::class, 'update']);
Route::put('backlog/{id}/statut', [BacklogController::class, 'updateStatut']);
Route::delete('jeux/{id}', [JeuController::class, 'delete']); 

