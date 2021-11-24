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
  
<form action="{{ route('materias.destroy',$materia->id) }}" method="post">
        @csrf
    <div class="container d-flex">
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" class="btn btn-danger ml-auto" value="Eliminar materia">
    </div>
</form>

<form action="{{ route('materias.update',$materia->id) }}" method="post" autocomplete=off>
    @csrf
    
    <div class="container">
        <input type="hidden" name="_method" value="PUT">
            <fieldset>
                <legend>Editar materia</legend>
                        <div class="mb-3">
                            <label for="CodigoMateria" class="form-label">Codigo de la materia</label>
                            <input type="text" id="CodigoMateria" class="form-control" name="codigo_materia" value="{{$materia->codigo_materia}}">
                        </div>
                        <div class="mb-3">
                            <label for="Nombre" class="form-label">Nombre de la materia</label>
                            <input type="text" id="Nombre" class="form-control" name="nombre" value="{{$materia->nombre}}">
                        </div>
                        <div class="mb-3">
                            <label for="Escuela" class="form-label">Escuela</label>
                            <select id="Escuela" class="form-control" name="escuela_id">
                                <option value="{{$materia->escuela->id}}">{{$materia->escuela->nombre}}</option>
                                @foreach($escuelas as $escuela)
                                    @if($materia->escuela->id != $escuela->id)
                                        <option value="{{$escuela->id}}">{{$escuela->nombre}}</opcion>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Prerrequisito" class="form-label">Prerrequisito</label>
                            <select id="Prerrequisito" class="form-control" name="prerrequisito_id">
                            @if($materia->prerrequisito)
                                <option value="{{$materia->prerrequisito->id}}">{{$materia->prerrequisito->codigo_materia}} | {{$materia->prerrequisito->nombre}}</option>
                                <option value="">Sin prerrequisito</option>
                            @else
                                <option value="">Sin prerrequisito</option>
                            @endif
                                @foreach($todasMaterias as $laMateria)
                                    @if($materia->id != $laMateria->id)
                                        <option value="{{$laMateria->id}}">{{$laMateria->codigo_materia}} | {{$laMateria->nombre}}</opcion>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Valoracion" class="form-label">Unidades Valorativas</label>
                            <input type="text" id="Valoracion" class="form-control" name="unidades_valorativas" value="{{$materia->unidades_valorativas}}">
                        </div>
                        <div class="mb-3">
                            <label for="Ciclo" class="form-label">Ciclo en el que se imparte</label>
                            <input type="text" id="Ciclo" class="form-control" name="num_ciclo" value="{{$materia->num_ciclo}}">
                        </div>
                        <div class="mb-3">
                            <label for="docente_id" class="form-label">Coordinador</label>
                            <select id="docente_id" class="form-control" name="docente_id">
                                <option value="{{$materia->coordinador->id}}">{{$materia->coordinador->user->name}}</option>
                                @foreach($docentes as $docente)
                                    @if($materia->coordinador->id != $docente->id)
                                        <option value="{{$docente->id}}">{{$docente->user->name}}</opcion>
                                    @endif
                                @endforeach
                            </select>
                        </div>
            </fieldset>
            <input type="submit" class="btn btn-warning" value="Editar" id="editar">&nbsp;
            <a href="{{route('materias.index')}}"><button type="button" class="btn btn-primary">Cancelar</button></a>
        </div>
    </form>
</div>
@endsection