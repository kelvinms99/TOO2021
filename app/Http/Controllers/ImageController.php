<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Locale;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Locale $local){
        return view('image.index', ['local' => $local, 'images' => Image::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Locale $local)
    {
        return view('image.create', ['local'=>$local]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Locale $local)
    {
        if($archivo=$request->file('image')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('img/locales', $nombre); 
            $request->nombre = $nombre;  
            Image::create([
                'locale_id'=>$local->id,
                'nombre'=>$request->nombre
            ]);
            $request->session()->flash('success', '¡La imagen se agrego al catalogo con exito!');
        }
        return redirect()->route('images.create', $local);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Locale $local, Image $image)
    {
        return view('image.edit', ['local'=>$local, 'image'=>$image]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locale $local, Image $image)
    {
        Storage::delete('img/locales/$image->nombre');
        $image->delete();
        return redirect()->route('images.index', $local);
    }
}
