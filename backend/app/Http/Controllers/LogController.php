<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    /**
     * Enregistre un nouveau log dans la collection MongoDB.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $log = Log::create($request->all());
        return response()->json($log, 201);
    }

    /**
     * Retourne tous les logs enregistrés.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Log::all());
    }
}
