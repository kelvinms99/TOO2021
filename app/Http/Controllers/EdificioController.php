<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Edificio;
use Illuminate\Http\Request;
use App\Models\Escuela;
use App\Models\EdificioEscuela;

class EdificioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Escuela $escuela)
    {
        return view('edificio.index', ['escuela' => $escuela, 'edificios' => Edificio::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Escuela $escuela)
    {
        return view('edificio.create', ['escuela' => $escuela]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Escuela $escuela)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required'
        ]);
        Edificio::create($request->all());
        $request->session()->flash('success', '¡El edificio se registro con exito!');
        return redirect()->route('edificios.create', $escuela);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Edificio  $edificio
     * @return \Illuminate\Http\Response
     */
    public function show(Edificio $edificio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Edificio  $edificio
     * @return \Illuminate\Http\Response
     */
    public function edit(Escuela $escuela, Edificio $edificio)
    {
        return view('edificio.edit', ['escuela' => $escuela, 'edificio' => $edificio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Edificio  $edificio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escuela $escuela, Edificio $edificio)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required'
        ]);
        $edificio->update($request->all());
        return redirect()->route('edificios.index', $escuela);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Edificio  $edificio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escuela $escuela, Edificio $edificio)
    {
        $edificio->delete();
        return redirect()->route('edificios.index', $escuela);
    }

    public function establecerEdificio(Request $request, Escuela $escuela, Edificio $edificio){
        EdificioEscuela::create([
            'edificio_id' => $edificio->id,
            'escuela_id' => $escuela->id
        ]);
        $request->session()->flash('success', 'Se establececio el edificio ' . $edificio->nombre . ' a la escuela ' . $escuela->nombre . ' con exito');
        return redirect()->route('edificios.index', $escuela);
    }

    public function quitarEdificio(Request $request, Escuela $escuela, Edificio $edificio){
        $vinculos = EdificioEscuela::where('edificio_id', $edificio->id)->where('escuela_id', $escuela->id);
        $vinculos->delete();
        $request->session()->flash('success', 'Se quito el edificio ' . $edificio->nombre . ' a la escuela ' . $escuela->nombre . ' con exito');
        return redirect()->route('edificios.index', $escuela);
    }
}
