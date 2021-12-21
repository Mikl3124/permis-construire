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
        $project = Projet::find($request->project_id)->first();
        if ($project->declarant_id != null){
            
        }else{
            $declarant = new Declarant;
            $declarant->nom = $request->nom; 
            $declarant->prenom = $request->prenom;
            $declarant->date_naissance = $request->date;
            $declarant->lieu_naissance = $request->lieu;
            $declarant->adresse = $request->adresse;

        }

        if ($declarant->save()) {
            
            $project->declarant_id = $declarant->id;
            if ($declarant->save()) {
                Flashy::success('Le déclarant ajouté avec succès');
                return Redirect::back();
            }
            Flashy::error('Une erreur est survenue !!! ');
            return redirect()->back();
        }
            Flashy::error('Une erreur est survenue !!! ');
            return redirect()->back();
    }

}