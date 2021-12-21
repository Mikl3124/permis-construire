<?php

namespace App\Http\Controllers;

use App\Model\Type;
use App\Model\User;
use App\Model\Projet;
use App\Mail\Formulaire;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

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
        $categories = Type::all();
        $projet = Projet::where('user_id', Auth::user()->id)->first();
        $projet->adresse = $request->adresse;
        $projet->title = 'Projet de' . ' ' . "$current_user->prenom" . ' ' . "$current_user->nom";
        $projet->save();

        return view('questionnaireStep2', compact('projet', 'categories'));
      }

        $validatedData = $request->validate([
            'prenom' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        $projet = $request;

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
        $projet->title = 'Projet de' . ' ' . "$user->prenom" . ' ' . "$user->nom";

        $projet->save();

        Mail::to('bonjour@permis-construire.com')
            ->send(new Formulaire($request->except('_token')));

        Auth::loginUsingId($user->id);

        $categories = Type::all();

        return view('questionnaireStep2', compact('projet', 'categories'));

    }

    public function step1(Request $request)
    {
      
      if (Auth::check()) {
        $user = Auth::user();
        $projet = Projet::where('user_id', Auth::user()->id)->first();
        $categories = Type::all();

        return view('questionnaireStep1', compact('user', 'projet', 'categories'));
    }
    return redirect('questionnaire-create');
    }

    public function step2(Request $request)
    {
      if (Auth::check()) {
        $user = Auth::user();
        $projet = Projet::find($request->projet_id);
        $categories = Type::all();

        return view('questionnaireStep2', compact('user', 'projet', 'categories'));
      }

    return redirect('questionnaire-create');
    }

    public function submit(Request $request)
    {

      $projet = Projet::find($request->projet_id);

      if ($projet->user_id === Auth::user()->id){
        $projet->type_id = $request->type;
        $projet->save();
        return redirect('dashboard');
      }
      Flashy::error('Un problème est survenu... ');
      return Redirect::back();
    }

}
