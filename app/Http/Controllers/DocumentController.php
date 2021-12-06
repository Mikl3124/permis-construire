<?php

namespace App\Http\Controllers;

use App\Model\Projet;
use App\Model\Document;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class DocumentController extends Controller
{
    public function uploadDocument(Request $request)
    {
        $projet = Projet::find($request->projet_id);
        if ($projet->user_id === Auth::user()->id){
            $request->validate([
                'document' => 'required|mimes:pdf,doc,jpeg,png,jpg,gif,svg|max:6144',
            ]);

            $documentName = time() . '.' . $request->document->extension();

            /* Store $documentName name in DATABASE from HERE */
            $path_to_store = Storage::disk('s3')->put('documents', $request->document);

            $path = Storage::disk('s3')->url($path_to_store);

            $document = new Document;
            $document->path = $path_to_store;
            $document->name = $documentName;
            $document->user_id = Auth::user()->id;
            $document->title = $request->title;
            $document->project_id = $projet->id;
            $document->extension = $request->document->extension();

            if($document->save()){
              Flashy::success('Le document a été téléchargé avec succès !');
              return Redirect::back();
            }
        }
        Flashy::error('Une erreur est survenue');
        return Redirect::back();

    }

    public function deleteDocument($id)
    {
        $document = Document::find($id);
        if ($document->user_id === Auth::user()->id) {
            Storage::delete( $document->path);
            $document->delete();

            Flashy::success('Le document a été supprimé avec succès !');
            return Redirect::back();
        }
        Flashy::error('Vous ne pouvez pas supprimer ce document !');
        return Redirect::back();
    }

    public function downloadDocument($id)
    {

        $document = Document::find($id);

        if ($document->user_id === Auth::user()->id) {
            return Storage::download($document->path);
        }
        Flashy::error('Vous ne pouvez télécharger ce document !');
        return Redirect::back();
    }

}
