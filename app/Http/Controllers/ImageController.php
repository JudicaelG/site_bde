<?php
namespace App\Http\Controllers;
use App\Aime_image;
use Illuminate\Http\Request;
use App\Image;
use App\Commentaire;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('images.create', compact('id'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $images = Image::find($id);
        $commentaires = Commentaire::where('id_image', $id)->get();
        if (\Auth::check()){
            $aimeImage = Aime_image::where('id_image', $id)->where('id_utilisateur', \Auth::user()->id)->first();
        }
        return view('images.show')
            ->with(compact('images'))
            ->with(compact('commentaires'))
            ->with(compact('aimeImage'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*
         * On supprime les images (et les commentaire et les likes associé à une image)
         */
        $images = Image::findOrFail($id);
        $images->delete();
        $commentaires = Commentaire::where('id_image', $id)->delete();
        $aimeImage = Aime_image::where('id_image', $id)->delete();

        return redirect('/evenement/');
    }
}