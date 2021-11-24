@extends('layouts.default')
@section('content')



<div class="container-fluid">

  <div class="row">
      <div class="col">
        <strong>Solicitudes de reservas</strong> 
      </div>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach($reservas as $reserva)
  <form action="{{ route('aprobar', $reserva->id) }}" method="POST">
                {{ csrf_field() }}
    <div class="col mt-4">
      <div class="card border-info bg-primary h-100">
        @if(!$reserva->local->images->isEmpty())
        <img src="{{asset('img/locales/'.$reserva->local->images[0]->nombre)}}" class="card-img-top" alt="{{$reserva->local->images[0]->nombre}}">
        @else
        <img src="..." class="card-img-top" alt="...">
        @endif
        <div class="card-body text-light">
          <h5 class="card-title">Reserva  @if($reserva->aprobado)<span class="badge rounded-pill bg-success">Aprobado</span> @else <span class="badge rounded-pill bg-warning">Pendiente</span> @endif </h5>
          <p class="card-text"> 


          <fieldset>

                <div class="form-group row">
                    <label class="col-md-5 form-control-label" for="name">Local</label>
                    <div class="col-md-7">
                        <input type="text" id="local" name="local" value="{{$reserva->local->nombre}}" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-5 form-control-label" for="name">Materia</label>
                    <div class="col-md-7">
                        <input type="text" id="materia" name="materia" value="{{$reserva->materia->nombre}}" class="form-control">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-5 form-control-label" for="name">Docente</label>
                    <div class="col-md-7">
                        <input type="text" id="docente" name="docente" value="{{$reserva->docente->user->name}}" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-5 form-control-label" for="name">Horario</label>
                    <div class="col-md-7">
                        <input type="text" id="dia" name="dia" value="{{$reserva->horario->dia}}" class="form-control">
                        <input type="text" id="hora" name="hora" value="{{$reserva->horario->hora}}" class="form-control">
                      </div>

                </div>

            </fieldset>

          </p>
          @if(!$reserva->aprobado)
            <button type="submit" class="btn btn-success mb-2">Aprobar</button>
          @endif
        </div>
      </div>
    </div>
    </form>
  @endforeach
  </div>
</div>

@endsection
