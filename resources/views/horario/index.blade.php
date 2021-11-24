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
            <a href="{{route('horarios.create')}}"><button class="btn btn-primary" type="button"><i class="fa fa-plus fa-1x"></i>&nbsp;&nbsp;Insertar</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if(sizeof($horarios)>0)
                <br/>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">HORA</th>
                            <th scope="col">DIA</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($horarios as $horario)
                            <tr>
                                <th scope="row">{{$horario->id}}</th>
                                <td>{{$horario->hora}}</td>
                                <td>{{$horario->dia}}</td>
                                <td style="width: 100px;"><a href="{{route('horarios.edit', $horario)}}"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit fa-1x"></i></button></a></td>
                            </tr>                   
                    @endforeach
                    </tbody>
                </table>
            @else
                <br/>
                <div class="alert alert-secondary" role="alert" style="text-align: center;">
                    No hay horarios. 
                </div>
            @endif
        </div>
    </div>
</div>


@endsection