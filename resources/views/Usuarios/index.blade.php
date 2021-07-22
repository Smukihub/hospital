@extends('layouts.app')
<script src="https://kit.fontawesome.com/5dbadd71d1.js" crossorigin="anonymous"></script>

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card-header">
                <form  class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input type="search" name="search" class="form-control form-control-navbar" placeholder="Buscar..." aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                @if ($search)
                <h6>
                    <div class="alert alert-primary" role="alert">
                    Resultados '{{ $search }}'' son:
                    </div>
                </h6>   
            @endif
            </div>
      

            <div class="card-body">
                <h4>Click para generar PDF  <a style="color:#e7650f" href="{{ route('users.pdf')}}">i<i class="fas fa-file-download"></i></a> - Total de Usuarios registrados ({{$total}})
                </h4>
            <table  class="table table-bordered">
                <thead class="thead-dark">
                    <a href="Usuarios/create"  class="btn btn-primary form-control" >Agregar Usuario</a>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido P.</th>
                    <th scope="col">Apellido M.</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody class="thead-light">
                    @forelse ($usuarios as $usuario)
                        <tr id="{{$usuario->id}}">
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->apellidop }}</td>
                                <td>{{ $usuario->apellidom }}</td>
                                <td>{{ $usuario->nivel }}</td>
                            <td>
                                <a href="/Usuarios/{{$usuario->id}}" class="btn btn-warning">Ver</a>
                                <a href="/Usuarios/{{$usuario->id}}/edit" class="btn btn-success">Editar</a>
                                <a href="/usuario-pdf/{Usuario}" class="btn btn-primary">PDF</a>
                                <form action="/Usuarios/{{$usuario->id}}" method="post" style="display: inline;"  onsubmit="return confirm('Desea eliminar');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>    
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Sin usuarios registrados</td>
                        </tr>
                    @endforelse
                </tbody> 
            </table>
               
                </div>
            </div>
        </div>
    </div>

@endsection