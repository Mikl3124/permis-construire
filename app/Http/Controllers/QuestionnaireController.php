<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionnaireController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'email' => 'email|required',
        ]);

        $user = Auth::user();
        dd($validatedData);

    }
}
