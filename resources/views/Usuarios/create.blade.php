@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro Usuario') }}</div>

                <div class="card-body">
                                        
                    <form action="/Usuarios" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido Paterno:</label>
                            <input id="apellidop" type="text" name="apellidop" class="form-control" value="{{ old('apellidop') }}" required autocomplete="apellido" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="apellidom">Apellido Materno:</label>
                            <input id="apellidom" type="text" name="apellidom" class="form-control" value="{{ old('apellidom') }}" required autocomplete="apellido" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input id="usuario" type="text" name="usuario" class="form-control" value="{{ old('usuario') }}" required autocomplete="telefono" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nivel">Nivel:</label>
                            <select class="form-control" name="nivel" id="nivel">
                                <option>Usuario</option>
                                <option>Administrador</option>
                                <option>Ingeniero</option>
                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password">Password del usuario:</label>
                            <input id="password" type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password2">Repita el password:</label>
                            <input id="password2" type="password" name="password2" class="form-control">
                        </div>
                    
                        <input type="submit" class="btn btn-primary" value="Guardar">    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection