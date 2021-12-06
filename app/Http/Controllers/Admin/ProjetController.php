<?php

namespace App\Http\Controllers\Admin;

use App\Model\Type;
use App\Model\Document;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProjetController extends Controller
{
  public function categories()
  {
    $item = 'categories';
    $categories= Type::all();

    return view('admin.categories', compact('item', 'categories'));
  }

  public function addCategorie(Request $request)
  {
    if (Auth::user()->role === 'admin'){
        $request->validate([
            'document' => 'required|mimes:jpeg,png,jpg,gif,svg|max:6144',
        ]);
      }
        $documentName = time() . '.' . $request->document->extension();

        /* Store $documentName name in DATABASE from HERE */
        $path_to_store = Storage::disk('s3')->put('categories', $request->document);

        $path = Storage::disk('s3')->url($path_to_store);

        $type = new Type;
        $type->image_url = $path_to_store;
        $type->name = $request->name;

        if($type->save()){
          Flashy::success('Le document a été téléchargé avec succès !');
          return Redirect::back();
        }
    Flashy::error('Une erreur est survenue');
    return Redirect::back();
  }

  public function deleteCategorie($id)
  {
    $categorie = Type::find($id);

    if (Auth::user()->role === 'admin') {
      Storage::delete($categorie->image_url);
      if ($categorie->delete()) {
        Flashy::success('Le document a été téléchargé avec succès !');
        return Redirect::back();
      }
      Flashy::error('Une erreur est survenue');
      return Redirect::back();
    }
  }

}
