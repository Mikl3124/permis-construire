<?php

namespace App\Http\Controllers;

use App\Model\Projet;
use App\Model\Declarant;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Redirect;

class DeclarantController extends Controller
{

    public function createDeclarant(Request $request)
    {
        $project = Projet::where('id',$request->project_id)->first();

        $declarant = Declarant::where('id', $request->declarant_id)->first();
  
        $declarant->nom = $request->nom; 
        $declarant->prenom = $request->prenom;
        $declarant->date_naissance = $request->date;
        $declarant->lieu_naissance = $request->lieu;
        $declarant->adresse = $request->adresse;

        if ($declarant->save()) {
            $project->declarant_id = $declarant->id;
            $project->save();

            Flashy::success('Le déclarant a été modifié avec succès');
            return redirect()->back();

        }
            Flashy::error('Une erreur est survenue !!! ');
            return redirect()->back();
    }

}