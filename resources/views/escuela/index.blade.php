@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="{{route('escuela.create')}}"><button class="btn btn-primary" type="button">Insertar</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if(sizeof($escuelas)>0)
                <br/>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($escuelas as $escuela)
                            <tr>
                                <th scope="row">{{$escuela->id}}</th>
                                <td>{{$escuela->nombre}}</td>
                                <td style="width: 200px;"><a href="{{route('edificios.index', $escuela)}}"><button type="button" class="btn btn-primary">Gestionar Edificios</button></a></td>
                                <td style="width: 100px;"><a href="{{route('escuela.edit', $escuela)}}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                            </tr>                   
                    @endforeach
                    </tbody>
                </table>
            @else
                <br/>
                <div class="alert alert-secondary" role="alert" style="text-align: center;">
                    No hay escuelas. 
                </div>
            @endif
        </div>
    </div>
</div>

@endsection