<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backlog;

class BacklogController extends Controller
{

    public function store(Request $request) {
        dd($request->all());

        try {
            $backlog = new Backlog();
            $backlog->utilisateur_id = $request->input('utilisateur_id');
            $backlog->jeu_id = $request->input('jeu_id');
            $backlog->statut = $request->input('statut');
            $backlog->save();
    
            return response()->json($backlog, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    


    public function updateStatut(Request $request, $id) {
        $backlog = Backlog::find($id);

        if(!$backlog) {
            return response()->json(['message' => 'Backlog introuvable'], 404);
        }

        $backlog->statut = $request->input('statut');
        $backlog->save();

        return response()->json(['message' => 'status mis à jour avec succès']);
    }
}
