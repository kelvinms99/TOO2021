@extends('layouts.default')
@section('content')

@if(session("success"))
<div class="container">
    <div class="alert alert-success" role="alert">
        <p>{{session('success')}}</p>
    </div>
</div>
<br/>
@endif

<div class="container">
    <p>
        <a href="{{route('escuela.index')}}"><button class="btn btn-primary" type="button">Atras</button></a>
    </p>
    <div>
        <h4>Escuela: {{$escuela->nombre}}</h4>
        <div>
            <h5>Edificios asociados</h5>
            @if(sizeof($escuela->edificios)>0)
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Ubicacion</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($escuela->edificios as $edificio)
                        <tr>
                            <th scope="row">{{$edificio->id}}</th>
                            <td>{{$edificio->nombre}}</td>
                            <td>{{$edificio->ubicacion}}</td>
                            <form action="{{route('edificios.quitar', [$escuela, $edificio])}}" method="post">
                            @csrf
                                <td style="width: 150px;"><input type="submit" class="btn btn-primary" value="Quitar" id="quitar"></td>
                            </form>
                        </tr>    
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-secondary" role="alert" style="text-align: center;">
                        No hay edificios asociados a la escuela
                </div>
            @endif  
        </div>
    </div>
</div><br><br>

<div class="container">
    <h4>Todos los Edificios</h4>
    <p>
        <a href="{{route('edificios.create', $escuela)}}"><button class="btn btn-primary" type="button">Insertar</button></a>
    </p>
    @if(sizeof($edificios)>0)
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Ubicacion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($edificios as $edificio)
            @if(!$escuela->edificios->contains($edificio->id))
            <tr>
                <th scope="row">{{$edificio->id}}</th>
                <td>{{$edificio->nombre}}</td>
                <td>{{$edificio->ubicacion}}</td>
                <form action="{{route('edificios.establecer', [$escuela, $edificio])}}" method="post">
                @csrf
                    <td style="width: 150px;"><input type="submit" class="btn btn-primary" value="Establecer" id="establecer"></td>
                </form>
                <td style="width: 100px;"><a href="{{route('edificios.edit', [$escuela, $edificio])}}"><button type="button" class="btn btn-warning">Editar</button></a></td>
            </tr>  
            @endif               
        @endforeach
        </tbody>
    </table>
    @else
        <div class="alert alert-secondary" role="alert" style="text-align: center;">
            No hay edificios.
        </div>
    @endif
</div>

@endsection
