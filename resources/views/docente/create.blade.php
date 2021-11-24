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
    <form action="{{route('docentes.store')}}" method="post" autocomplete=off>
    @csrf
        <fieldset>
            <legend>Registrar Docente</legend>
                
            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="name">Nombre</label>
                <div class="col-md-9">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Ingrese el Nombre" required pattern="^[a-zA-Z_áéíóúñ\s]{0,30}$" title="El nombre de contener solamente letras">
                    
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="email">Correo Institucional</label>
                <div class="col-md-9">
                  
                <input type="email" class="form-control" id="email" name="email" placeholder="correo@ues.edu.sv">
                       
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                <label class="col-md-3 form-control-label" for="password">Password</label>
                <div class="col-md-9">
                  
                    <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese el password" maxlength="15" pattern="^[a-zA-Z0-9_áéíóúñ\s\./+*]{1,15}$" title="La contraseá puede contener letras, números, los caracteres (. + * /), tamaño máximo: 15" required />
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password','La contraseña debe coincidir y ser de mas de 5 carácteres') }}</strong>
                    </span>
                @endif   
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="dui">DUI</label> 
                <div class="col-md-9">
                    <input type="text" id="dui" name="dui" class="form-control" placeholder="00000000-0" maxlength="10" pattern="[0-9]{8}-[0-9]{1}" title="El DUI debe tener 9 digitos y un guion (-) antes del último digito" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="nit">NIT</label> 
                <div class="col-md-9">
                    <input type="text" id="nit" name="nit" class="form-control" placeholder="0000-000000-000-0" maxlength="17" pattern="[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}" title="El NIT debe tener 17 digitos contando los guiones" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 form-control-label" for="fecha_n">Fecha de nacimiento</label>
                <div class="col-md-9">
                    <input type="date" id="fecha_n" name="fecha_n" class="form-control" placeholder="dd.mm.yyyy" maxlength="12" required>
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Registrar" id="registrar">&nbsp;
            <a href="{{route('docentes.index')}}"><button type="button" class="btn btn-danger">Salir</button></a>
        </fieldset>
    </form>
</div>
<br/>

@endsection