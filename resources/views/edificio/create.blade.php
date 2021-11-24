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

@if(session("success"))
<div class="container">
    <div class="alert alert-success" role="alert">
        <p>{{session('success')}}</p>
    </div>
</div>
<br/>
@endif

<div class="container">
    <form action="{{route('edificios.store', $escuela)}}" method="post" autocomplete=off>
    @csrf
        <fieldset>
            <legend>Registrar Edificio</legend>
                <div class="mb-3">
                    <label for="CodigoMateria" class="form-label">Nombre del edificio</label>
                    <input type="text" id="nombre" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="CodigoMateria" class="form-label">Ubicacion</label>
                    <input type="text" id="ubicacion" class="form-control" name="ubicacion">
                </div>
            <input type="submit" class="btn btn-primary" value="Registrar" id="registrar">&nbsp;
            <a href="{{route('edificios.index', $escuela)}}"><button type="button" class="btn btn-danger">Salir</button></a>
        </fieldset>
    </form>
</div>
<br/>

@endsection