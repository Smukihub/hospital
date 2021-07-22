@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col">
                   
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top"  src="/image/logop3.png" alt="200" width="150">
                        <div class="card-body">
                          <h5 class="card-title">Personal</h5>
                          <p class="card-text">Registrar, editar, ver y eliminar datos de los usuarios.</p>
                          <a href="/Usuarios" class="btn btn-primary">Lista de personal</a>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top"  src="/image/equiposlogo.png" alt="200" width="150">
                        <div class="card-body">
                          <h5 class="card-title">Equipos</h5>
                          <p class="card-text">Registrar, editar, ver y eliminar datos de los equipos.</p>
                          <a href="/Equipos" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
             
              </div>
          
        </div>
    </div>
</div>
@endsection
