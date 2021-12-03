<?php

namespace App\Http\Controllers;

use App\Model\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function view()
  {
    $user = Auth::user();
    $projet = Projet::find($user)->first();

    return view('dashboard', compact('user', 'projet'));
  }
}
