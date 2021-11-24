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
        <a href="{{route('locales.index')}}"><button class="btn btn-primary" type="button">Atras</button></a>
    </p>
    <div>
        <a href="{{route('images.create', $local)}}"><button class="btn btn-primary" type="button">Insertar</button></a>
    </div>
    <br>
</div>
<div class="container">
    <div>
        <h4>Local: {{$local->nombre}}</h4>
        <div>
            <h5>Catalogo de imagenes del local:</h5>
            @if(sizeof($images)>0)
                @foreach($images as $image)
                    @if($image->local->id == $local->id)
                    <a href="{{route('images.edit', [$local, $image])}}"><img src="{{asset('img/locales/'.$image->nombre)}}"   alt="{{$image->nombre}}" width="150"></a>
                    @endif
                @endforeach
            @else
                <div class="alert alert-secondary" role="alert" style="text-align: center;">
                        No hay Imagenes del local
                </div>
            @endif  
        </div>
    </div>
</div>
</div><br><br>
@endsection