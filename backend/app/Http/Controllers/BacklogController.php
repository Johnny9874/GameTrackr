<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backlog;

class BacklogController extends Controller
{

    public function store(Request $request) {
        try {
            // Vérif si l'utilisateur existe
            if (!\App\Models\User::find($request->input('utilisateur_id'))) {
                return response()->json(['error' => 'Utilisateur introuvable'], 404);
            }
    
            // Vérif si le jeu existe
            if (!\App\Models\Jeu::find($request->input('jeu_id'))) {
                return response()->json(['error' => 'Jeu introuvable'], 404);
            }
    
            $backlog = new \App\Models\Backlog();
            $backlog->utilisateur_id = $request->input('utilisateur_id');
            $backlog->jeu_id = $request->input('jeu_id');
            $backlog->statut = $request->input('statut');
            $backlog->save();
    
            return response()->json($backlog, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function showByUser($id) {
        $backlog = \App\Models\Backlog::with('jeu')
                    ->where('utilisateur_id', $id)
                    ->get();
    
        return response()->json($backlog);
    }
    

    public function updateStatut(Request $request, $id) {

    $backlog = \App\Models\Backlog::where('utilisateur_id', $id)
        ->where('jeu_id', $request->input('jeu_id'))
        ->first();

    if (!$backlog) {
        return response()->json(['message' => 'Backlog introuvable'], 404);
    }

    $backlog->statut = $request->input('statut');
    $backlog->save();

    return response()->json(['message' => 'Statut mis à jour avec succès']);
    }


    public function destroy($id) {
        $backlog = \App\Models\Backlog::find($id);
    
        if (!$backlog) {
            return response()->json(['message' => 'Backlog introuvable'], 404);
        }
    
        $backlog->delete();
    
        return response()->json(['message' => 'Jeu supprimé du backlog avec succès']);
    }
    

    public function filtrerParStatut($id, $statut) {
    $backlogs = \App\Models\Backlog::with('jeu')
        ->where('utilisateur_id', $id)
        ->where('statut', $statut)
        ->get();

    return response()->json($backlogs);
    }

}
