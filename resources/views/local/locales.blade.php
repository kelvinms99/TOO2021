@extends('layouts.default')
@section('content')
<form action="{{route('buscarLocal.edificio')}}" method="get">
<div class="container">
  <select class="form-select" aria-label="Default select example" name="edificio" style="width:40%;" required>
    <option value="" selected>Buscar por edificio</option>
    @foreach($edificios as $edificio)
    <option value="{{$edificio->id}}">{{$edificio->nombre}}</option>
    @endforeach
  </select>&nbsp;&nbsp;
  <input type="submit" class="btn btn-primary mb-2" value="Buscar">&nbsp;
  <a href="{{route('buscarlocal')}}"><button type="button" class="btn btn-primary mb-2">Ver todos los locales</button></a>
</div>
</form>
<br>
<div class="container-fluid">
  <div class="row">
      <div class="col">
        <strong>Locales Disponibles para Reservar</strong> 
      </div>
  </div>
  <br>
  @foreach($locales as $local)
  <form action="{{route('horarios/local')}}" method="post">
  @csrf
  <input type="hidden" name="locale" value="{{$local->id}}">
  <div class="card mb-3" style="width:100%;">
    <div class="row g-0">
      <div class="col-md-4">
        @if(!$local->images->isEmpty())
        <img src="{{asset('img/locales/'.$local->images[0]->nombre)}}" class="img-fluid rounded-start" alt="{{$local->images[0]->nombre}}">
        @else
        <img src="..." class="img-fluid rounded-start" alt="...">
        @endif
      </div>
      <div class="col-md-8">
        <div class="card-body">
        <span class="badge rounded-pill bg-success" style="color:white;">Disponible</span>
          <h5 class="card-title">Nombre del local: {{$local->nombre}}</h5>
          <p class="card-text">Edificio: {{$local->edificio->nombre}}</p>
          <p class="card-text">Planta: {{$local->planta}}</p>
          <input type="submit" class="btn btn-primary mb-2" value="Reservar este local">
        </div>
      </div>
    </div>
  </div>
  </form>
  @endforeach
</div>

@endsection
