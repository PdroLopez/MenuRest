@extends('layouts.master')

@section('content')


<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
    <div class="col-12">
        <div class="card">
            <div class="card-header">{{ __('Iniciar Sesión') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electrónico o Teléfono</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordarme') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" >
                      <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary m-2" >{{ __('Iniciar sesión') }}</button>
                        {{-- <a href="{{ asset('login/facebook') }}" class="btn btn-primary m-2">Ingresar con Facebook</a> --}}
                        {{-- <a href="{{ asset('login/google') }}" class="btn btn-primary m-2">Ingresar con Google</a> --}}
                        @if (Route::has('password.request'))
                          <a class="btn btn-link m-2" href="{{ route('password.request') }}">
                            {{ __('Olvidaste Tu Contraseña?') }}
                          </a>
                        @endif
                        <a class="btn btn-link m-2 ml-10" href="{{ asset('register') }}">Crear una cuenta</a>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
