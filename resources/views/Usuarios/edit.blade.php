@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar') }}</div>

                <div class="card-body">
                    
                    <form action="/Usuarios/{{$usuario->id}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" type="text" name="nombre" class="form-control" value="{{$usuario->nombre}}" required>
                        </div>


                        <div class="form-group">
                            <label for="apellidop">Apellido Paterno:</label>
                            <input id="apellidop" type="text" name="apellidop" class="form-control" value="{{$usuario->apellidop}}" required>
                        </div>
                        

                        <div class="form-group">
                            <label for="apellidom">Apellido Materno:</label>
                            <input id="apellidom" type="text" name="apellidom" class="form-control" value="{{$usuario->apellidom}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input id="usuario" type="text" name="usuario" class="form-control" value="{{$usuario->usuario}}" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="nivel">Nivel:</label>
                            <select class="form-control" name="nivel" id="nivel" required>
                                @if ($usuario->nivel =="Usuario")
                                    <option selected>Jefe</option>
                                @else
                                    <option>Usuario</option>
                                @endif
                                @if ($usuario->nivel=="Administrador")
                                    <option selected>Administrador</option>
                                @else
                                    <option>Administrador</option>
                                @endif
                                @if ($usuario->nivel=="Ingeniero")
                                    <option selected>Ingeniero</option>
                                @else
                                    <option>Ingeniero</option>
                                @endif
                            
                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input id="email" type="email" name="email" class="form-control" value="{{$usuario->email}}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password del usuario:</label>
                            <input id="password" type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password2">Repita el password:</label>
                            <input id="password2" type="password" name="password2" class="form-control" required>
                        </div> 
                        
                        
                        <input type="submit" class="btn btn-primary" value="Guardar">   



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection