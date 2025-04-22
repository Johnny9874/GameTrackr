<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backlog;
use App\Models\User;
use App\Models\Jeu;

class BacklogController extends Controller
{
    /**
     * Ajoute un jeu au backlog d’un utilisateur après vérification des entités.
     */
    public function store(Request $request)
    {
        try {
            // Vérifie que l'utilisateur existe
            if (!User::find($request->input('utilisateur_id'))) {
                return response()->json(['error' => 'Utilisateur introuvable'], 404);
            }

            // Vérifie que le jeu existe
            if (!Jeu::find($request->input('jeu_id'))) {
                return response()->json(['error' => 'Jeu introuvable'], 404);
            }

            // Création du backlog
            $backlog = Backlog::create([
                'utilisateur_id' => $request->input('utilisateur_id'),
                'jeu_id' => $request->input('jeu_id'),
                'statut' => $request->input('statut'),
            ]);

            return response()->json($backlog, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Retourne tous les jeux du backlog d’un utilisateur.
     */
    public function showByUser($id)
    {
        $backlogs = Backlog::with('jeu')
            ->where('utilisateur_id', $id)
            ->get();

        return response()->json($backlogs);
    }

    /**
     * Met à jour le statut d’un jeu dans le backlog d’un utilisateur.
     */
    public function updateStatut(Request $request, $id)
    {
        $backlog = Backlog::where('utilisateur_id', $id)
            ->where('jeu_id', $request->input('jeu_id'))
            ->first();

        if (!$backlog) {
            return response()->json(['message' => 'Backlog introuvable'], 404);
        }

        $backlog->statut = $request->input('statut');
        $backlog->save();

        return response()->json(['message' => 'Statut mis à jour avec succès']);
    }

    /**
     * Supprime un jeu du backlog par son ID.
     */
    public function destroy($id)
    {
        $backlog = Backlog::find($id);

        if (!$backlog) {
            return response()->json(['message' => 'Backlog introuvable'], 404);
        }

        $backlog->delete();

        return response()->json(['message' => 'Jeu supprimé du backlog avec succès']);
    }

    /**
     * Filtre les jeux d’un backlog selon leur statut.
     */
    public function filtrerParStatut($id, $statut)
    {
        $backlogs = Backlog::with('jeu')
            ->where('utilisateur_id', $id)
            ->where('statut', $statut)
            ->get();

        return response()->json($backlogs);
    }
}
