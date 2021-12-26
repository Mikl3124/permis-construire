<?php

namespace App\Http\Controllers;

use App\Model\Type;
use App\Model\Projet;
use App\Model\Document;
use App\Model\Declarant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function view()
  {
    $user = Auth::user();
    $projet = Projet::where('user_id', $user->id)->first();
    $documents_download = Document::where('user_id', $user->id)->get();
    $types = Type::all();
    if (isset($projet->declarant_id)){
      $declarant = Declarant::where('id', $projet->declarant_id)->first();
    }else{
      $declarant = new Declarant;
      $declarant->save();
    }
    return view('dashboard', compact('user', 'projet', 'documents_download', 'types', 'declarant'));
  }
}
