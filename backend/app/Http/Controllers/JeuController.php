<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;

class JeuController extends Controller
{
    public function index()
    {
        return Jeu::all();
    }

    public function show($id)
    {
        return Jeu::findOrFail($id);
    }

    public function jeuxParUtilisateur($id)
    {
        return \App\Models\Jeu::where('utilisateur_id', $id)->get();
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $jeu = \App\Models\Jeu::create($request->all());
        return response()->json($jeu, 201); // 201 = Created
    }
}
