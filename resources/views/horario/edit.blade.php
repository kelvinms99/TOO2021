@extends('layouts.default')
@section('content')

@if ($errors->any())
<div class="container">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
@endif

<form action="{{route('horarios.destroy', $horario->id)}}" method="post">
    @csrf
    <div class="container d-flex">
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" class="btn btn-danger ml-auto" value="Eliminar Horario">
    </div>
</form>

<form action="{{route('horarios.update', $horario->id)}}" method="post" autocomplete=off>
    @csrf
    <div class="container">
        <input type="hidden" name="_method" value="PUT">
        <fieldset>
            <legend>Editar horario</legend>
            
            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="name">Hora</label>
                <div class="col-md-9">
                    <input type="text" id="hora" name="hora" class="form-control" value="{{$horario->hora}}">
                    
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="dia">Dia</label>
                <div class="col-md-9">
                    <input type="text" id="dia" name="dia" class="form-control" value="{{$horario->dia}}" required pattern="^[a-zA-Z_áéíóúñ\s]{0,10}$" title="El dia debe contener solamente letras">
                    
                </div>
            </div>
            
        </fieldset>
        <input type="submit" class="btn btn-warning" value="Editar" id="editar">&nbsp;
        <a href="{{route('horarios.index')}}"><button type="button" class="btn btn-primary">Cancelar</button></a>
    </div>
</form>


@endsection