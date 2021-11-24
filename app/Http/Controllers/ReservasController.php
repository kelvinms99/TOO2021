<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locale;
use App\Models\Horario;
use App\Models\Materia;
use App\Models\Docente;
use App\Models\Reserva;
use DB;

class ReservasController extends Controller
{
    //
    public function index(){

        return view('reserva.menu', ['locales'=>Locale::all()]);
    }

    public function horarios(Request $request){

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
    
        $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
       

        return view('reserva.horarios', compact(['locale', 'horas', 'dias', 'materias', 'horarios', 'dias', 'id']));
    }

    public function solicitudesIndex(Request $request){

        $validatedData = $request->validate([
            'dia' => 'required|regex:/\w/',
            'hora' => 'required|regex:/\w/',
            'materia_id' => 'required|numeric'
        ]);

        $materia = Materia::findOrFail($request->materia_id);
        $id_docente = $materia->docente_id;
        $docente = Docente::findOrFail($id_docente);
        $horario = Horario::where('hora', $request->hora)->where('dia', $request->dia)->get();
        $id_horario = $horario[0]->id;
        $id_local = $request->locale_id;
        $locale = Locale::findOrFail($id_local);
        
        $reserva = Reserva::create(['local_id'=>$id_local, 'materia_id'=>$request->materia_id, 'docente_id'=>$id_docente, 'horario_id'=>$id_horario, 'aprobado'=>false]);
        //$reservas = Reserva::all(); 

        return view('reserva.matriz', compact('reserva'));
    }


    public function listadoSolicitudes(){
        $reservas = Reserva::all(); 

        return view('reserva.solicitudes', compact('reservas'));
    }

    public function cambiarEstado(Reserva $reserva){
        $reserva->aprobado = true;
        $reserva->update();
        $reservas = Reserva::all();

        return view('reserva.solicitudes', compact('reservas'));
    }

}