<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;

class CommentaireController extends Controller
{
    public function store(Request $request)
    {
        $commentaire = Commentaire::create($request->all());
        return response()->json($commentaire, 201);
    }

    public function index()
    {
        return response()->json(Commentaire::all());
    }
}
