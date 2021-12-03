<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Projet;
use App\Model\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function permisConstruire()
    {
        return view('permis-construire');
    }

    public function form()
    {
        if (!Auth::guest()){
            if (Auth::user()->role === 'admin') {
                $users = User::all();
                $documents = Document::all();
                $projects = Projet::all();

                return view('admin.dashboard', compact('users', 'documents', 'projects'));
            }
        } else {
            return view('questionnaireCreate');
        }
            
        
    }
}
