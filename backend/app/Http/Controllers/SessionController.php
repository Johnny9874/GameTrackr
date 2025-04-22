<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameSession;

class SessionController extends Controller
{
    /**
     * Enregistre une nouvelle session de jeu dans la collection MongoDB.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $session = GameSession::create($request->all());
        return response()->json($session, 201);
    }
    

    /**
     * Retourne toutes les sessions de jeu enregistrées.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(GameSession::all());
    }
}
