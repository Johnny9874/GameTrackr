<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;


Route::get('/', function () {
    return '<h1>hello world</h1>';
});

Route::get('/jeux', [JeuController::class, 'index']);