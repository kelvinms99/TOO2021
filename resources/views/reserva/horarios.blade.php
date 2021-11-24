@extends('layouts.default')
@section('content')


<div class="container-fluid">

    <div class="card">
        <div class="card-header text-center">Horarios de laboratorio {{$locale->nombre}}</div>
        <div class="card-body">


        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="table-primary" scope="col">Horario</th>
                    @foreach($dias as $d)
                    <th class="table-primary" scope="col">{{$d}}</th>    
                    @endforeach
                </tr>
        
            </thead>
            <tbody>
                <tr>
                    <th scope="row">6:20-8:00</th>                   
                    @php
                    $l1 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "6:20-8:00")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Lunes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp        
                    @if($l1)              
                    <th scope="row">{{$l1->materianombre}}<br>
                    @if($l1->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                    

                    @php
                    $l2 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "6:20-8:00")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Martes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l2)
                    <th scope="row">{{$l2->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif       


                    @php
                    $l3 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "6:20-8:00")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Miercoles")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l3)
                    <th scope="row">{{$l3->materianombre}}<br>
                    @if($l3->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l4 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "6:20-8:00")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Jueves")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l4)
                    <th scope="row">{{$l4->materianombre}}<br>
                    @if($l4->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l5 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "6:20-8:00")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Viernes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l5)
                    <th scope="row">{{$l5->materianombre}}<br>
                    @if($l5->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 


                    @php
                    $l6 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "6:20-8:00")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Sabado")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l6)
                    <th scope="row">{{$l6->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                    
                    



                </tr>
                
                <tr>
                    <th scope="row">8:05-9:45</th>

                    @php
                    $l1 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "8:05-9:45")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Lunes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp        
                    @if($l1)              
                    <th scope="row">{{$l1->materianombre}}<br>
                    @if($l1->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                    

                    @php
                    $l2 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "8:05-9:45")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Martes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l2)
                    <th scope="row">{{$l2->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif       


                    @php
                    $l3 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "8:05-9:45")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Miercoles")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l3)
                    <th scope="row">{{$l3->materianombre}}<br>
                    @if($l3->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l4 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "8:05-9:45")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Jueves")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l4)
                    <th scope="row">{{$l4->materianombre}}<br>
                    @if($l4->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l5 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "8:05-9:45")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Viernes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l5)
                    <th scope="row">{{$l5->materianombre}}<br>
                    @if($l5->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 


                    @php
                    $l6 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "8:05-9:45")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Sabado")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l6)
                    <th scope="row">{{$l6->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 


                </tr>
                <tr>
                    <th scope="row">9:50-11:30</th>


                    @php
                    $l1 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "9:50-11:30")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Lunes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp        
                    @if($l1)              
                    <th scope="row">{{$l1->materianombre}}<br>
                    @if($l1->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                    

                    @php
                    $l2 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "9:50-11:30")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Martes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l2)
                    <th scope="row">{{$l2->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif       


                    @php
                    $l3 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "9:50-11:30")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Miercoles")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l3)
                    <th scope="row">{{$l3->materianombre}}<br>
                    @if($l3->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l4 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "9:50-11:30")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Jueves")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l4)
                    <th scope="row">{{$l4->materianombre}}<br>
                    @if($l4->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l5 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "9:50-11:30")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Viernes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l5)
                    <th scope="row">{{$l5->materianombre}}<br>
                    @if($l5->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 


                    @php
                    $l6 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "9:50-11:30")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Sabado")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l6)
                    <th scope="row">{{$l6->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                 
                </tr>
                <tr>
                    <th scope="row">11:35-13:15</th>

                    @php
                    $l1 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "11:35-13:15")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Lunes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp        
                    @if($l1)              
                    <th scope="row">{{$l1->materianombre}}<br>
                    @if($l1->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                    

                    @php
                    $l2 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "11:35-13:15")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Martes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l2)
                    <th scope="row">{{$l2->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif       


                    @php
                    $l3 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "11:35-13:15")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Miercoles")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l3)
                    <th scope="row">{{$l3->materianombre}}<br>
                    @if($l3->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l4 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "11:35-13:15")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Jueves")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l4)
                    <th scope="row">{{$l4->materianombre}}<br>
                    @if($l4->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l5 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "11:35-13:15")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Viernes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l5)
                    <th scope="row">{{$l5->materianombre}}<br>
                    @if($l5->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 


                    @php
                    $l6 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "11:35-13:15")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Sabado")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l6)
                    <th scope="row">{{$l6->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                 
                </tr>
                <tr>
                    <th scope="row">13:20-15:00</th>

                    @php
                    $l1 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "13:20-15:00")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Lunes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp        
                    @if($l1)              
                    <th scope="row">{{$l1->materianombre}}<br>
                    @if($l1->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                    

                    @php
                    $l2 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "13:20-15:00")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Martes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l2)
                    <th scope="row">{{$l2->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif       


                    @php
                    $l3 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "13:20-15:00")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Miercoles")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l3)
                    <th scope="row">{{$l3->materianombre}}<br>
                    @if($l3->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l4 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "13:20-15:00")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Jueves")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l4)
                    <th scope="row">{{$l4->materianombre}}<br>
                    @if($l4->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l5 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "13:20-15:00")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Viernes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l5)
                    <th scope="row">{{$l5->materianombre}}<br>
                    @if($l5->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 


                    @php
                    $l6 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "13:20-15:00")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Sabado")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l6)
                    <th scope="row">{{$l6->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                 
                </tr>
                <tr>
                    <th scope="row">15:05-16:45</th>

                    @php
                    $l1 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "15:05-16:45")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Lunes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp        
                    @if($l1)              
                    <th scope="row">{{$l1->materianombre}}<br>
                    @if($l1->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                    

                    @php
                    $l2 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "15:05-16:45")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Martes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l2)
                    <th scope="row">{{$l2->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif       


                    @php
                    $l3 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "15:05-16:45")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Miercoles")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l3)
                    <th scope="row">{{$l3->materianombre}}<br>
                    @if($l3->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l4 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "15:05-16:45")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Jueves")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l4)
                    <th scope="row">{{$l4->materianombre}}<br>
                    @if($l4->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l5 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "15:05-16:45")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Viernes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l5)
                    <th scope="row">{{$l5->materianombre}}<br>
                    @if($l5->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 


                    @php
                    $l6 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "15:05-16:45")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Sabado")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l6)
                    <th scope="row">{{$l6->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                 
                </tr>
                <tr>
                    <th scope="row">16:50-18:30</th>

                    @php
                    $l1 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "16:50-18:30")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Lunes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp        
                    @if($l1)              
                    <th scope="row">{{$l1->materianombre}}<br>
                    @if($l1->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                    

                    @php
                    $l2 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "16:50-18:30")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Martes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l2)
                    <th scope="row">{{$l2->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif       


                    @php
                    $l3 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "16:50-18:30")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Miercoles")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l3)
                    <th scope="row">{{$l3->materianombre}}<br>
                    @if($l3->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l4 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "16:50-18:30")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Jueves")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l4)
                    <th scope="row">{{$l4->materianombre}}<br>
                    @if($l4->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l5 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "16:50-18:30")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Viernes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l5)
                    <th scope="row">{{$l5->materianombre}}<br>
                    @if($l5->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 


                    @php
                    $l6 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "16:50-18:30")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Sabado")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l6)
                    <th scope="row">{{$l6->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                 
                </tr>
                <tr>
                    <th scope="row">18:35-20:15</th>

                    @php
                    $l1 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "18:35-20:15")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Lunes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp        
                    @if($l1)              
                    <th scope="row">{{$l1->materianombre}}<br>
                    @if($l1->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                    

                    @php
                    $l2 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "18:35-20:15")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Martes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l2)
                    <th scope="row">{{$l2->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif       


                    @php
                    $l3 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "18:35-20:15")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Miercoles")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l3)
                    <th scope="row">{{$l3->materianombre}}<br>
                    @if($l3->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l4 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "18:35-20:15")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Jueves")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l4)
                    <th scope="row">{{$l4->materianombre}}<br>
                    @if($l4->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 



                    @php
                    $l5 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "18:35-20:15")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Viernes")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l5)
                    <th scope="row">{{$l5->materianombre}}<br>
                    @if($l5->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 


                    @php
                    $l6 = DB::table('reservas')
                    ->join('horarios', 'reservas.horario_id', '=', 'horarios.id')
                    ->join('materias', 'reservas.materia_id', '=','materias.id')
                    ->where('horarios.hora', "18:35-20:15")
                    ->where('reservas.local_id', $id)
                    ->where('horarios.dia', "Sabado")
                    ->select('materias.nombre as materianombre', 'reservas.aprobado as estado')
                    ->first();
                    @endphp
                    @if($l6)
                    <th scope="row">{{$l6->materianombre}}<br>
                    @if($l2->estado==1)
                        Aprobado
                    @else
                        No Aprobado
                    @endif
                    </th>
                    @else
                    <th scope="row">Disponible</th>    
                    @endif 
                 
                </tr>
            </tbody>
        </table>

        </div>
    </div>




    <div class="card">
        <div class="card-header text-center">Solicitar horario para {{$locale->nombre}}</div>
            <div class="card-body">

            <form action="{{ url('/solicitudes') }}" method="POST" class="form-inline">
                {{ csrf_field() }}

            <div class="form-group mb-2">
                <label for="staticEmail2" class="sr-only">Locales</label>
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Seleccionar">
            </div>

            <input type="hidden" id="locale_id" class="form-control" name="locale_id" value="{{$locale->id}}">

            <div class="form-group mx-sm-3 mb-2">
                <select class="form-control" id="hora" name="hora" required>
                    <option value="">HORA</option>
                    @foreach($horas as $hora)
                     <option value="{{$hora}}">{{$hora}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <select class="form-control" id="dia" name="dia" required>
                    <option value="">DIA</option>
                    @foreach($dias as $dia)
                     <option value="{{$dia}}">{{$dia}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <select class="form-control" id="materia_id" name="materia_id" required>
                    <option value="">MATERIA</option>
                    @foreach($materias as $materia)
                     <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
            </form>

            </div>
        </div>
    </div>

</div>

@endsection
