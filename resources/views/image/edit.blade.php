@extends('layouts.default')
@section('content')
<div class="container">
    <p>
        <a href="{{route('images.index', $local)}}"><button class="btn btn-primary" type="button">Atras</button></a>
    </p>
</div>
<div class="container">
    <img src="{{asset('img/locales/'.$image->nombre)}}" class="rounded mx-auto d-block" alt="{{$image->nombre}}" style="width: 250px;">
    <br>
    <form action="{{ route('images.destroy', [$local, $image]) }}" method="post">
        @csrf
        <div class="container d-flex">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" class="btn btn-danger" style="margin:5px auto;" value="Eliminar imagen del catalogo">
        </div>
    </form>
</div>
@endsection