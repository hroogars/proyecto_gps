@extends('layouts.mainAuth')
@section('content')
     <p class="text-center">Inicia Sesión para Continuar</p>
        <form id="login-form" action="{{ route('login') }}" method="POST" novalidate="">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="username">E-Mail</label>
                <input type="email" class="form-control underlined" name="email" id="email" value="{{ old('email') }}" placeholder="Su email" required> 
                 @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Su contraseña" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif 
            </div>
            <div class="form-group">
                <label for="remember">
                    <input class="checkbox" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <span>Recuerdame</span>
                </label>
                <a href="{{ route('password.request') }}" class="forgot-btn pull-right">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Ingresar</button>
            </div>
            <div class="form-group">
                <p class="text-muted text-center">¿No tienes una cuenta?
                    <a href="{{ url('/register') }}">Registrate!</a>
                </p>
            </div>
        </form>
@endsection