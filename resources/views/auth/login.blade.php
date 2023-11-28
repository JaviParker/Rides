@extends('layouts.master')

@section('content')
<div class="container-fluid fixed">
   
    <div class="row full-height" style="background-color: #1E1E1E">
        <div class="d-flex col-md-4 align-items-center justify-content-center" style="z-index: 3">
            <div class="row-md-12 full-height" style="width: 25vw">
                <form class="col" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="d-flex row mb-5 mt-3 justify-content-center" style="font-size: 2rem; color: white;">Avientame</div>
                    <div class="row mb-3">
    
                        <div class="col-md-12">
                            <input id="email" type="email" placeholder="Correo o nombre de usuario" class="form-control @error('email') is-invalid @enderror login-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="row mb-3">    
                        <div class="col">
                            <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror login-input" name="password" required autocomplete="current-password">
    
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                <label class="form-check-label" for="remember" style="font-size: 0.8rem; color: white">
                                    {{ __('Recordarme') }}
                                </label>
                            </div>
                        </div>    
                        <div class="col-md-7 mb-5 justify-content-left">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size: 0.8rem; width: 15vw; padding: 0;">
                                    {{ __('Olvidó su contraseña?') }}
                                </a>
                            @endif
                        </div> 
                    </div>
    
                    <div class="row ">
                        <div class="col-md-12 offset-md-2 mb-3">
                            <button type="submit" class="btn btn-primary" style="color: white; width: 14vw; font-weight: bold;">
                                {{ __('Iniciar sesion') }}
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 offset-md-2">
                        @if (Route::has('register'))
                            <a class="btn btn-outline-primary register-btn" style="color: @primary; width: 14vw; font-weight: bold;" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                        @endif   
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        <div class="imgs d-flex col-md-8 align-items-center" style="display: grid;">
            {{-- <img src="{{ asset('assets/bg.jpg')}}" alt="background" class="full-height login-bg fixed" width="fit-content"> --}}
            <div class="overlay"></div>
            <h1 class="login-tittle">Avientame</h1>
        </div>
    </div>

</div>
@endsection
