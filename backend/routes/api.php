<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;

Route::get('/jeux', [JeuController::class, 'index']);
Route::get('/jeux/{id}', [JeuController::class, 'show']);
Route::get('/utilisateurs/{id}/jeux', [JeuController::class, 'jeuxParUtilisateur']);
Route::post('/jeux', [JeuController::class, 'store']);
