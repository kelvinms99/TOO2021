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
    <form action="{{route('escuela.store')}}" method="post" autocomplete=off>
    @csrf
        <fieldset>
            <legend>Registrar Escuela</legend>
                <div class="mb-3">
                    <label for="CodigoMateria" class="form-label">Nombre de la escuela</label>
                    <input type="text" id="nombre" class="form-control" name="nombre">
                </div>
            <input type="submit" class="btn btn-primary" value="Registrar" id="registrar">&nbsp;
            <a href="{{route('escuela.index')}}"><button type="button" class="btn btn-danger">Salir</button></a>
        </fieldset>
    </form>
</div>
<br/>

@endsection