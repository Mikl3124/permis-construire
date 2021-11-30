<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Projet;
use App\Mail\Formulaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class QuestionnaireController extends Controller
{

    public function create(Request $request)
    {
      if (Auth::check()){
        $current_user = Auth::user();
        $current_user->prenom = $request->prenom;
        $current_user->name = $request->nom;
        $current_user->telephone = $request->telephone;
        $current_user->email = $request->email;
        $current_user->save();

        $projet = Projet::find($current_user)->first();
        $projet->adresse = $request->adresse;
        $projet->save();


        return view('questionnaireStep2', compact('projet'));
      }

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

        Mail::to('bonjour@permis-construire.com')
            ->send(new Formulaire($request->except('_token')));

        Auth::loginUsingId($user->id);

        return view('questionnaireStep2', compact('projet'));

    }

    public function step1()
    {
      if (Auth::check()) {
        $user = Auth::user();
        $projet = Projet::find($user)->first();
        return view('questionnaireStep1', compact('user', 'projet'));
    }
    return redirect('questionnaire-create');
    }

    public function step2()
    {
      if (Auth::check()) {
        $user = Auth::user();
        $projet = Projet::find($user)->first();
        return view('questionnaireStep2', compact('user', 'projet'));
    }
    return redirect('questionnaire-create');
    }

    public function submit(Request $request)
    {
      return view('dashboard');
    }

}
