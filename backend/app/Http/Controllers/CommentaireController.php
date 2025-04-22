<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;

class CommentaireController extends Controller
{

    /**
     * Enregistre un nouveau commentaire dans la collection MongoDB.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $commentaire = Commentaire::create($request->all());
        return response()->json($commentaire, 201);
    }


    /**
     * Retourne tous les commentaires enregistrés.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Commentaire::all());
    }
}
