@extends('layouts.mainAuth')
@section('content')
<p class="text-center">REGISTRO PARA OBTENER ACCESO INSTANTÁNEO</p>
<form id="signup-form" action="{{ route('register') }}" method="POST" novalidate="">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Nombre</label>
        <div class="row">
            <div class="col-sm-6">
                <input type="text" class="form-control underlined" name="name" id="name" value="{{ old('name') }}" placeholder="Nombre" required> 
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <!--iv class="col-sm-6">
                <input type="text" class="form-control underlined" name="lastname" id="lastname" placeholder="Enter lastname" required=""> </div-->
                 
        </div>
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">Email</label>
        <input type="email" class="form-control underlined" name="email" id="email" placeholder="Ingrese Email" required=""> </div>
    <div class="form-group{{ $errors->has('RUT') ? ' has-error' : '' }}">
        <label for="document_number">RUT (sin puntos ni digito verificador)</label>
        <input type="text" class="form-control underlined" name="document_number" id="document_number" placeholder="Ingrese Su RUT" required=""> </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password">Contraseña</label>
        <div class="row">
            <div class="col-sm-6">
                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Ingrese contraseña" required=""> 
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-6">
                <input type="password" class="form-control underlined" name="password_confirmation" id="password_confirmation" placeholder="Repita su contraseña" required=""> </div>
        </div>
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-block btn-primary">Registrar</button>
    </div>
    <div class="form-group">
        <p class="text-muted text-center">Ya tienes una cuenta?
            <a href="{{ url('/login') }}">Ingresa!</a>
        </p>
    </div>
</form>
@endsection