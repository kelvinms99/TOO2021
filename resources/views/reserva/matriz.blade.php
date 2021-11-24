@extends('layouts.default')
@section('content')


<div class="container-fluid">

    <div class="card">
        <div class="card-header text-center">Solicitud de Reserva para {{$reserva->local->nombre}}</div>
        <div class="card-body">


        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="table-primary" scope="col">Horario</th>
                    <th class="table-primary" scope="col">Lunes</th>
                    <th class="table-primary" scope="col">Martes</th>
                    <th class="table-primary" scope="col">Miercoles</th>
                    <th class="table-primary" scope="col">Jueves</th>
                    <th class="table-primary" scope="col">Viernes</th>
                    <th class="table-primary" scope="col">Sabado</th>
                </tr>
        
            </thead>
            <tbody>
                <tr>
                    <th scope="row">6:20-8:00</th>

                </tr>
                
                <tr>
                    <th scope="row">8:08-9:45</th>
       
                </tr>
                <tr>
                    <th scope="row">9:50-11:30</th>
                 
                </tr>
                <tr>
                    <th scope="row">11:35-1:15</th>
                 
                </tr>
                <tr>
                    <th scope="row">1:20-3:00</th>
                 
                </tr>
                <tr>
                    <th scope="row">3:05-4:45</th>
                 
                </tr>
                <tr>
                    <th scope="row">4:50-6:30</th>
                 
                </tr>
                <tr>
                    <th scope="row">6:35-8:15</th>
                 
                </tr>
            </tbody>
        </table>

        </div>
    </div>

</div>

@endsection
