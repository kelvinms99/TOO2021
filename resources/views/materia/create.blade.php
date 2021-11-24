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
    <form action="{{route('materias.store')}}" method="post" autocomplete=off>
    @csrf
        <fieldset>
            <legend>Registrar Materia</legend>
                <div class="mb-3">
                    <label for="CodigoMateria" class="form-label">Codigo de la materia</label>
                    <input type="text" id="CodigoMateria" class="form-control" name="codigo_materia">
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre de la materia</label>
                    <input type="text" id="Nombre" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="Escuela" class="form-label">Escuela</label>
                    <select id="Escuela" class="form-control" name="escuela_id">
                        <option value="">...</option>
                        @foreach($escuelas as $escuela)
                            <option value="{{$escuela->id}}">{{$escuela->nombre}}</opcion>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Prerrequisito" class="form-label">Prerrequisito</label>
                    <select id="Prerrequisito" class="form-control" name="prerrequisito_id">
                        <option value="">Sin prerrequisito</option>
                        @foreach($materias as $materia)
                            <option value="{{$materia->id}}">{{$materia->codigo_materia}} | {{$materia->nombre}}</opcion>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Valoracion" class="form-label">Unidades Valorativas</label>
                    <input type="text" id="Valoracion" class="form-control" name="unidades_valorativas">
                </div>
                <div class="mb-3">
                    <label for="Ciclo" class="form-label">Ciclo en el que se imparte</label>
                    <input type="text" id="Ciclo" class="form-control" name="num_ciclo">
                </div>
                <div class="mb-3">
                    <label for="docente_id" class="form-label">Coordinador de la materia</label>
                    <select id="docente_id" class="form-control" name="docente_id">
                        <option value="">Escojer el Coordinador</option>
                        @foreach($docentes as $docente)
                            <option value="{{$docente->id}}">{{$docente->user->name}}</opcion>
                        @endforeach
                    </select>
                </div>
            <input type="submit" class="btn btn-primary" value="Registrar" id="registrar">&nbsp;
            <a href="{{route('materias.index')}}"><button type="button" class="btn btn-danger">Salir</button></a>
        </fieldset>
    </form>
</div>
<br/>

@endsection