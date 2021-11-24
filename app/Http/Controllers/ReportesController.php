<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Reserva;
use App\Models\Locale;
use App\Models\Horario;
use App\Models\Materia;
use App\Models\Escuela;
use App\Models\Docente;
use DB;


class ReportesController extends Controller
{
    //
    public function index(){

        return view('reportes.menu');
    }

    public function descargarPDF(Request $request){

        $tipoReporte = $request->input('tiporeporte');
      
        //dd($locales);
        $porMateria = DB::table('reservas')
        ->join('materias', 'reservas.materia_id', '=','materias.id')
        ->join('locales', 'reservas.local_id','=','locales.id')
        ->select('locales.nombre as localnombre', 'materias.nombre as materianombre', DB::raw('count(*) as cantidad'))
        ->groupBy('materia_id', 'local_id')
        ->get();
        //dd($porMateria);

        $porHorario = DB::table('reservas')
        ->join('materias', 'reservas.materia_id', '=','materias.id')
        ->join('locales', 'reservas.local_id','=','locales.id')
        ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
        ->select('locales.nombre as localnombre', 'materias.nombre as materianombre','horarios.hora as hora', DB::raw('count(*) as cantidad'))
        ->groupBy('materia_id', 'horarios.hora', 'locales.id')
        ->get();

        //dd($porHorario);

        $porEscuela = DB::table('reservas')
        ->join('locales', 'reservas.local_id','=','locales.id')
        ->join('edificios', 'locales.edificio_id', '=', 'edificios.id')
        //->join('edificio_escuela', 'edificio_escuela.edificio_id', '=', 'edificios.id')
        ->join('materias', 'reservas.materia_id', '=','materias.id')
        ->join('escuelas', 'escuelas.id', '=','materias.escuela_id')
        //->join('escuelas', 'escuelas.id', '=', 'edificio_escuela.escuela_id')
        ->select('locales.nombre as localnombre', 'escuelas.nombre as escuela', DB::raw('count(*) as cantidad'))
        ->groupBy('escuelas.id', 'locales.id')
        ->get();
        
      //  dd($porEscuela);
    
        
        $pdf = PDF::loadView('reportes.layout', ["tipoReporte"=>$tipoReporte, "porMateria"=>$porMateria, "porHorario"=>$porHorario, "porEscuela"=>$porEscuela]);
        

        return $pdf->download('reporte.pdf');
    }



}
