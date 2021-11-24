@extends('layouts.default')
@section('content')

@if ($errors->any())
<div class="container-fluid">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
@endif

@if(session("success"))
<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <p>{{session('success')}}</p>
    </div>
</div>
<br/>
@endif

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="{{route('docentes.create')}}"><button class="btn btn-primary" type="button"><i class="fa fa-plus fa-1x"></i>&nbsp;&nbsp;Insertar</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if(sizeof($docentes)>0)
                <br/>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">DUI</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($docentes as $docente)
                            <tr>
                                <th scope="row">{{$docente->id}}</th>
                                <td>{{$docente->dui}}</td>
                                <td>{{$docente->user->name}}</td>
                                <td>{{$docente->user->email}}</td>
                                <td>
                                    @if($docente->estado=="1")

                                        <button type="button" class="btn btn-success btn-sm">
                                        
                                        <i class="fa fa-check fa-1x"></i> Activo
                                        </button>

                                        @else

                                        <button type="button" class="btn btn-danger btn-sm">
                                    
                                         <i class="fa fa-check fa-1x"></i> Inactivo
                                         </button>

                                    @endif
                                </td>
                                <td style="width: 100px;"><a href="{{route('docentes.edit', $docente)}}"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit fa-1x"></i></button></a></td>
                            </tr>                   
                    @endforeach
                    </tbody>
                </table>
            @else
                <br/>
                <div class="alert alert-secondary" role="alert" style="text-align: center;">
                    No hay docentes. 
                </div>
            @endif
        </div>
    </div>
</div>


@endsection