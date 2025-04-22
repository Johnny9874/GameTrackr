<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;

class JeuController extends Controller
{

    /**
     * Retourne la liste de tous les jeux.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Jeu::all();
    }


    /**
     * Affiche un jeu spécifique par son ID.
     *
     * @param  int  $id
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return Jeu::findOrFail($id);
    }


    /**
     * Retourne tous les jeux liés à un utilisateur donné.
     *
     * @param  int  $id
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function jeuxParUtilisateur($id)
    {
        return \App\Models\Jeu::where('utilisateur_id', $id)->get();
    }


    /**
     * Enregistre un nouveau jeu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(\Illuminate\Http\Request $request)
    {
        $jeu = \App\Models\Jeu::create($request->all());
        return response()->json($jeu, 201); // 201 = Created
    }


     /**
     * Met à jour un jeu existant.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $req, $id)
    {
        $jeu = Jeu::find($id);

        if (!$jeu) {
            return response()->json(['error' => 'Jeu non trouvé'], 404);
        }

        $jeu->titre = $req->titre;
        $jeu->temps_estime = $req->temps_estime;
        $jeu->prix_achat = $req->prix_achat;

        $result = $jeu->save();

        if ($result) {
            return response()->json(['message' => 'Jeu mis à jour avec succès']);
        } else {
            return response()->json(['message' => 'Échec de la mise à jour'], 500);
        }
    }


    /**
     * Supprime un jeu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id) {
        $jeu = Jeu::find($id);

        if (!$jeu) {
            return response()->json(['error' => 'Jeu non trouvé'], 404);
        }

        $result = $jeu->delete();

        return response()->json(['message' => 'Jeu supprimé avec succès'], 200);
    }
}