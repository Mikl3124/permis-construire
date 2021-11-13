<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class QuestionnaireController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'prenom' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $user = new User;
        $projet = new Projet;
        $user->prenom = $request->prenom;
        $user->name = $request->nom;
        $user->telephone = $request->telephone;
        $user->email = $request->email;
        $user->role = 'client';
        $user->password = Hash::make($user->prenom.$user->name);
        $user->save();

        $projet->user_id = $user->id;
        $projet->adresse = $request->adresse;
        $projet->status = 'pending';
        $projet->save();

        Auth::loginUsingId($user->id);
        return redirect()->route('home');


    }
}
