<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locale;
use App\Models\Edificio;
use App\Models\Horario;
use App\Models\Materia;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('local.index', ['locales'=>Locale::all()]);
    }
 
    public function buscar()
    {
        return view('local.locales', ['locales'=>Locale::all(), 'edificios' => Edificio::all()]);
    }

    public function buscarPorEdificio(Request $request){
        $edificio = Edificio::find($request->edificio);
        $locales = $edificio->locales;
        return view('local.locales', ['locales'=>$locales, 'edificios' => Edificio::all()]);
    }

    public function reservar(Request $request)
    {
        $id = $request->locale;
        $locale = Locale::findOrFail($id);
        $horarios = Horario::all();
        $dias = [];
        $horas = [];
        foreach($horarios as $horario){
            if(!array_key_exists($horario->dia, $dias)){
                $dias[$horario->dia] = $horario->dia;
            }
            if(!array_key_exists($horario->hora, $horas)){
                $horas[$horario->hora] = $horario->hora;
            }
        }
        $materias = Materia::all();
      //  dd($id);


        return view('reserva.horarios', compact(['locale', 'horas', 'dias', 'materias']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('local.create', ['edificios'=>Edificio::all(), 'locales'=>Locale::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'edificio_id' => 'required|numeric',
            'horario_id' => 'numeric',
            'nombre' => 'required|regex:/\w/',
            'planta' => 'required|integer']);

        $data = $request->all();  
        Locale::create($data);
        $request->session()->flash('success', '¡El Local se registro con exito!');
        return redirect('/locales/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Locale $locale)
    {
        return view('local.edit', ['locale' => $locale, 'edificios' => Edificio::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locale $locale)
    {
        $validatedData = $request->validate([
            'edificio_id' => 'required|numeric',
            'horario_id' => 'numeric',
            'nombre' => 'required|regex:/\w/',
            'planta' => 'required|integer']);

        $locale->update($request->All());
        $request->session()->flash('success', '¡El local se actualizó con exito!');
        return redirect('/locales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Locale $locale)
    {
        $locale->delete();
        $request->session()->flash('success', 'Local eliminado exitosamente!');
        return redirect('/locales');
    }
}
