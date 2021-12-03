<?php

namespace App\Http\Controllers;

use App\Model\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProjectController extends Controller
{
    public function renameProject(Request $request)
    {
        $project = Projet::find($request->project_id);
        if ($project->user_id === Auth::user()->id) {
            $project->title = $request->project_name;
            $project->save();
        }
        return redirect()->back();
    }

    public function changeAdresseProject(Request $request)
    {
        $project = Projet::find($request->project_id);
        if ($project->user_id === Auth::user()->id) {
            $project->adresse = $request->project_adresse;
            $project->save();
        }
        return redirect()->back();
    }
        
}
