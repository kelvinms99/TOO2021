@extends('layouts.default')
@section('content')


<div class="container-fluid">

<div class="card">
  <div class="card-header">
    Reportes de las reservas de locales
  </div>
  <div class="card-body">
    
  <form action="{{ route('reportes.pdf') }}" method="POST" class="form-inline">
                {{ csrf_field() }}

            <div class="form-group mb-2">
                <label for="staticEmail2" class="sr-only">Locales</label>
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Seleccionar tipo de reporte">
            </div>

            <div class="form-group mx-sm-3 mb-2">
                <select class="form-control" id="tiporeporte" name="tiporeporte">
                    <option value="Horario">Horarios</option>
                    <option value="Materia">Materias</option>
                    <option value="Escuela">Escuelas</option>
                </select>
            </div>

            

            

            <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
            </form>

  </div>
</div>


</div>

@endsection
