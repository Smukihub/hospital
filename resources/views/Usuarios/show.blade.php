@extends('layouts.app')



@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">{{ __('Datos del usuario') }}</div>

              <div class="card-body">
                <table class="table table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido</th>
                      <th scope="col">Usuario</th>
                      <th scope="col">Nivel</th>
                      <th scope="col">E-mail</th>
                
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <td>{{$usuario->nombre}}</td>
                      <td>{{$usuario->apellidop}} {{$usuario->apellidom}}</td>
                      <td>{{$usuario->usuario}}</td>
                      <td>{{$usuario->nivel}}</td>
                      <td>{{$usuario->email}}</td>
                      
                      
                     
                      
                    </tr>
                    
                  </tbody>
                </table>              
                
              </div>
          </div>
      </div>
  </div>
</div>
@endsection 
