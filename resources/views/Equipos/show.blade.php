@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Datos del Equipo') }}</div>
  
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">No. Serie</th>
                        <th scope="col">No. Inventario</th>
                        <th scope="col">Fecha inicio</th>
                        <th scope="col">Fecha final</th>
                        <th scope="col">Periodo</th>
                        <th scope="col">Área</th>
                        <th scope="col">Prioridad</th>
                  
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$equipo->nombre}}</td>
                        <td>{{$equipo->marca}}</td>
                        <td>{{$equipo->modelo}}</td>
                        <td>{{$equipo->noserie}}</td>
                        <td>{{$equipo->noinventario}}</td>
                        <td>{{$equipo->fechaini}}</td>
                        <td>{{$equipo->fechafin}}</td>
                        <td>{{$equipo->periodo}}</td>
                        <td>{{$equipo->area}}</td>
                        <td>{{$equipo->prioridad}}</td>
                      </tr>
                      
                    </tbody>
                  </table>              
                  
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection