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
  
<form action="{{ route('locales.destroy',$locale->id) }}" method="post">
        @csrf
    <div class="container d-flex">
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" class="btn btn-danger ml-auto" value="Eliminar local">
    </div>
</form> 

<form action="{{ route('locales.update',$locale->id) }}" method="post" autocomplete=off>
    @csrf
    
    <div class="container">
        <input type="hidden" name="_method" value="PUT">
            <fieldset>
                <legend>Editar Local</legend>
                <div class="form-group row">
                <label class="col-md-3 form-control-label" for="nombre">Nombre del Local</label>
                <div class="col-md-9">
                  
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$locale->nombre}}" required>
                       
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="edificio">Edificio</label> 
                <div class="col-md-9">
                    <select id="edificio_id" class="form-control" name="edificio_id">
                        <option value="{{$locale->edificio->id}}">{{$locale->edificio->nombre}}</option>
                        @foreach($edificios as $edificio)
                            @if($locale->edificio->id != $edificio->id)
                                <option value="{{$edificio->id}}">{{$edificio->nombre}}</opcion>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="planta">Numero de planta</label>
                <div class="col-md-9">
                  
                <input type="number" class="form-control" id="planta" name="planta" value="{{$locale->planta}}" required />
                       
                </div>
            </div>

            </fieldset>
            <input type="submit" class="btn btn-warning" value="Editar" id="editar">&nbsp;
            <a href="{{route('locales.index')}}"><button type="button" class="btn btn-primary">Cancelar</button></a>
        </div>
    </form>
</div>
@endsection