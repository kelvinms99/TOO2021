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
    <form action="{{route('images.store', $local)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="images" class="form-label">Escoger imagenes</label>
            <input type="file" name="image" accept="image/png, image/jpeg" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" value="Registrar" id="registrar">&nbsp;
        <a href="{{route('images.index', $local)}}"><button type="button" class="btn btn-danger">Salir</button></a>
    </form>
</div>
@endsection