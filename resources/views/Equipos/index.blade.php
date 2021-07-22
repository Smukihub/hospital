@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
               {{--@can('jefe-only', Auth::user())@endcan --}} 
         
                           
            <div class="card-body">                                           
{{-- ////////proyectos--}}

                <h4> Total de Equipos registrados ({{$total}})
                </h4>
    
                <table  class="table table-striped">
                    <thead class="thead-dark">
                        <a href="Equipos/create" class="btn btn-primary form-control">Agregar Equipo</a>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>                        
                        <th scope="col">Área</th>                        
                        <th scope="col">Periodo</th>                        
                        <th scope="col">Accion</th>
                    </thead>
                    <tbody class="thead-light">
                        @forelse ($equipos as $equipo)
                            <tr> @if($equipo->nombre)
                            
                            @endif
                            
                                <td>{{ $equipo->nombre }}</td>
                                <td>{{ $equipo->marca }}</td>
                                <td>{{ $equipo->area }}</td>
                                <td>{{ $equipo->periodo }}</td>
                                <td>
                                    
                                    <a href="/Equipos/{{$equipo->id}}" class="btn btn-warning">Mostrar</a>
                                    <a href="/Equipos/{{$equipo->id}}/edit" class="btn btn-success">Editar</a>
                                    <form action="/Equipos/{{$equipo->id}}" method="post" style="display: inline;"  onsubmit="return confirm('Desea eliminar');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>   
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">Sin equipos registrados</td>
                            </tr>
                        @endforelse
                    </tbody> 
                </table>     
@endsection