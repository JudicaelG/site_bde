<?php
namespace App\Http\Controllers;
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
    public function create()
    {
        //
        return view('Image/create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Image();
        $user->alt= Input::get('name');
        $user->id_utilisateur= Input::get('id');
        if (Input::hasFile('image')){
            $file=Input::file('image');
            $file->move(public_path().'/images',$file->getClientOriginalName());

            $user->lien = $file->getClientOriginalName();
        }

        $user->save();
        return back();
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
        return view('images.show', compact('images'), compact('commentaires'));
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
        //
    }
}