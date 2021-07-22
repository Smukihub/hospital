@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <label for="nombre">Nombre</label>
                        <input id="nombre" type="text" class="form-control col-md-5 mb-3 @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>   
                        @error('nombre ')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror           
                        <div class=" row">
                            <div class="col-md-6 mb-3">
                                <label for="apellidop" >Apellido Paterno:</label>
                                <input id="apellidop" type="text" class="form-control @error('email') is-invalid @enderror" name="apellidop" value="{{ old('apellidop') }}" required autocomplete="apellidop">  
                                    @error('apellidop')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="apellidom">{{ __('Apellido Materno:') }}</label>
                                <input id="apellidom" type="text" class="form-control" value="{{ old('apellidom') }}" name="apellidom" required autocomplete="new-numcontrol">
                                    @error('apellidom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                                
                            </div>                         
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email">E-mail:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>   
                                @error('email ')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                                             
                            </div>                       
                            <div class="col-md-6 mb-3">
                                <label for="usuario">Nombre Usuario:</label>
                                <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}" required autocomplete="usuario" autofocus>   
                                
                                    @error('usuario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                                            
                            </div> 
                        </div>
                       
                       
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password">{{ __('Password') }}</label>
                               
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                               
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                
                            </div>
                        </div>

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div> 
                    </form>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
