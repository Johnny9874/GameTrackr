<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function store(Request $request)
    {
        $log = Log::create($request->all());
        return response()->json($log, 201);
    }

    public function index()
    {
        return response()->json(Log::all());
    }
}
