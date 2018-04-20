<?php namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller {

    public function upload($id){

        /*
         * On récupère les valeurs des input, de l'id de l'utilisateur et l'id de l'event
         * On vérifie si le fichier est present dans la requete
         * On place le fichier dans le bon repertoir avec le nom originel et dans la bdd
         */
        $img = new Image();
        $img->alt= Input::get('name');
        $img->id_utilisateur= \Auth::user()->id;
        $img->id_evenement= $id;
            if (Input::hasFile('image')){
                $file=Input::file('image');
                $file->move(public_path().'/img',$file->getClientOriginalName());

                $img->lien = '/img/'.$file->getClientOriginalName();
            }

        $img->save();
        return redirect('/evenement/'.$id);
        }

}