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
<form action="{{route('locales.store')}}" method="post" autocomplete=off>
    @csrf
        <fieldset>
            <legend>Registrar Local</legend>
                
            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="nombre">Nombre del Local</label>
                <div class="col-md-9">
                  
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ingrese el nombre del local" required>
                       
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="edificio">Edificio</label> 
                <div class="col-md-9">
                    <select id="edificio_id" class="form-control" name="edificio_id" required >
                        <option value="">...</option>
                        @foreach($edificios as $edificio)
                            <option value="{{$edificio->id}}">{{$edificio->nombre}}</opcion>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="planta">Numero de planta</label>
                <div class="col-md-9">
                  
                <input type="number" class="form-control" id="planta" name="planta" placeholder="##" required />
                       
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Registrar" id="registrar">&nbsp;
            <a href="{{route('locales.index')}}"><button type="button" class="btn btn-danger">Salir</button></a>
        </fieldset>
    </form>
</div>
<br/>

@endsection