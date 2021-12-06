<?php

namespace App\Http\Controllers;

use App\Model\Type;
use App\Model\Projet;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class ProjectController extends Controller
{
    public function editProject(Request $request)
    {
        $project = Projet::find($request->project_id);
        $type = Type::find($request->type_id);

        if ($project->user_id === Auth::user()->id) {
            $project->title = $request->title;
            $project->adresse = $request->adresse;
            $project->type_id = $type->id;
            $project->références_adatrales = $request->ref_cadastrales;
            $project->save();

        }
        return redirect()->back();
    }

    public function createType(Request $request)
    {
        if (Auth::user()->role === 'admin') {
            $type = new Type;
            $type->name = $request->typeName;
            $type->save();

            Flashy::success('Le type de projet a été ajouté avec succès !');
            return Redirect::back();

        }
        Flashy::error('Une erreur est survenue !!! ');
        return redirect()->back();
      }

}
