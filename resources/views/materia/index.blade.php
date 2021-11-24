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
            <a href="{{route('materias.create')}}"><button class="btn btn-primary" type="button">Insertar</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if(sizeof($materias)>0)
                <br/>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Escuela</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($materias as $materia)
                            <tr>
                                <th scope="row">{{$materia->id}}</th>
                                <td>{{$materia->codigo_materia}}</td>
                                <td>{{$materia->nombre}}</td>
                                <td>{{$materia->escuela->nombre}}</td>
                                <td style="width: 100px;"><a href="{{route('materias.edit', $materia)}}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                            </tr>                   
                    @endforeach
                    </tbody>
                </table>
            @else
                <br/>
                <div class="alert alert-secondary" role="alert" style="text-align: center;">
                    No hay materias. 
                </div>
            @endif
        </div>
    </div>
</div>


@endsection