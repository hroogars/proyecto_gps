@extends('layouts.mainAuth')
@section('content')
<p class="text-center">Recuperar Contraseña</p>
<p class="text-muted text-center">
    <small>Ingrese su dirección de email para recuperar su contraseña.</small>
</p>
 @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form id="reset-form" action="{{ route('password.email') }}" method="POST" novalidate="">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">Email</label>
        <input type="email" class="form-control underlined" name="email" id="email" value="{{ old('email') }}" placeholder="Su Email" required> 
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif</div>
    <div class="form-group">
        <button type="submit" class="btn btn-block btn-primary">Recuperar</button>
    </div>
    <div class="form-group clearfix">
        <a class="pull-left" href="{{ url('/login') }}">Volver para iniciar sesión</a>
        <a class="pull-right" href="{{ url('/register') }}">Registrate!</a>
    </div>
</form>
@endsection