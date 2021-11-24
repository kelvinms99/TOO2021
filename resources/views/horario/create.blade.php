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
    <form action="{{route('horarios.store')}}" method="post" autocomplete=off>
    @csrf
        <fieldset>
            <legend>Registrar Horario</legend>
                
            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="hora">Hora</label>
                <div class="col-md-9">
                    <input type="text" id="hora" name="hora" class="form-control" placeholder="Ingrese la hora">
                    
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="dia">Dia</label>
                <div class="col-md-9">
                    <input type="text" id="dia" name="dia" class="form-control" placeholder="Ingrese el dia" required pattern="^[a-zA-Z_áéíóúñ\s]{0,10}$" title="El dia debe contener solamente letras">
                    
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Registrar" id="registrar">&nbsp;
            <a href="{{route('horarios.index')}}"><button type="button" class="btn btn-danger">Salir</button></a>
        </fieldset>
    </form>
</div>
<br/>

@endsection