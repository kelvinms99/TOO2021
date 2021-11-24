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

<form action="{{route('edificios.destroy', [$escuela, $edificio])}}" method="post">
    @csrf
    <div class="container d-flex">
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" class="btn btn-danger ml-auto" value="Eliminar Escuela">
    </div>
</form>

<form action="{{route('edificios.update', [$escuela, $edificio])}}" method="post" autocomplete=off>
    @csrf
    <div class="container">
        <input type="hidden" name="_method" value="PUT">
        <fieldset>
            <legend>Editar edificio</legend>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de del edificio</label>
                <input type="text" id="nombre" class="form-control" name="nombre" value="{{$edificio->nombre}}">
            </div>      
            <div class="mb-3">
                <label for="nombre" class="form-label">Ubicacion</label>
                <input type="text" id="ubicacion" class="form-control" name="ubicacion" value="{{$edificio->ubicacion}}">
            </div>         
        </fieldset>
        <input type="submit" class="btn btn-warning" value="Editar" id="editar">&nbsp;
        <a href="{{route('edificios.index', $escuela)}}"><button type="button" class="btn btn-primary">Cancelar</button></a>
    </div>
</form>


@endsection