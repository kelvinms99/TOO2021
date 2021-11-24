@extends('layouts.default')
@section('content')

@if ($errors->any())
<div class="container-fluid">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
@endif

@if(session("success"))
<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <p>{{session('success')}}</p>
    </div>
</div>
<br/>
@endif

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="{{route('locales.create')}}"><button class="btn btn-primary" type="button">Insertar</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if(sizeof($locales)>0)
                <br/>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Local</th>
                            <th scope="col">Edificio</th>
                            <th scope="col">Planta</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($locales as $locale)
                            <tr>
                                <th scope="row">{{$locale->id}}</th>
                                <td>{{$locale->nombre}}</td>
                                <td>{{$locale->edificio->nombre}}</td>
                                <td>{{$locale->planta}}</td>
                                <td style="width: 200px;"><a href="{{route('images.index', $locale)}}"><button type="button" class="btn btn-primary">Gestionar Imagenes</button></a></td>
                                <td style="width: 100px;"><a href="{{route('locales.edit', $locale)}}"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit fa-1x"></i></button></a></td>
                            </tr>                   
                    @endforeach
                    </tbody>
                </table>
            @else
                <br/>
                <div class="alert alert-secondary" role="alert" style="text-align: center;">
                    No hay Locales registrados. 
                </div>
            @endif
        </div>
    </div>
</div>


@endsection