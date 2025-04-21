<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameSession;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        $session = GameSession::create($request->all());
        return response()->json($session, 201);
    }

    public function index()
    {
        return response()->json(GameSession::all());
    }
}
