@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar Equipo') }}</div>

                <div class="card-body">
                    <form action="/Equipos" method="post" enctype="multipart/form-data" >
                        @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" type="text" for="nombre" name="nombre" class="form-control" required autocomplete="nombre" autofocus>   
                        </div>                       
                        <div class="col-md-6 mb-3">
                            <label for="marca">Marca:</label>
                            <input id="marca" type="text" class="form-control" name="marca" required autocomplete="marca" autofocus>      
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="modelo">Modelo:</label>
                            <input id="modelo" type="text" name="modelo" for="modelo" class="form-control" required autocomplete="modelo" autofocus>   
                        </div>                       
                        <div class="col-md-6 mb-3">
                            <label for="noserie">No. Serie:</label>
                            <input id="noserie" type="number" class="form-control" name="noserie" required autocomplete="noserie" autofocus>      
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fechaini">Fecha de inicio:</label>
                            <input id="fechaini" type="date" class="form-control" name="fechaini" for="fechaini" required autocomplete="fechaini" autofocus>   
                        </div>                       
                        <div class="col-md-6 mb-3">
                            <label for="fechafin">Fecha final:</label>
                            <input id="fechafin" type="date" name="fechafin" for="fechafin" class="form-control" name="fechafin" required autocomplete="fechafin" autofocus>      
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="periodo">Periodo:</label>
                            <select class="form-control" name="periodo" for="periodo "id="periodo">
                                <option>1</option>
                                <option>3</option>
                                <option>6</option>
                            </select>   
                        </div>                       
                        <div class="col-md-6 mb-3">
                            <label for="area">Área:</label>
                            <select class="form-control" name="area" id="area">
                                <option>Urgencias</option>
                                <option>Quirofano</option>
                                <option>Laboratorio</option>
                                <option>Rayos X</option>
                                <option>Neonatos</option>
                                <option>Hospitalización</option>
                                <option>Ginecología</option>
                                <option>Sala de shock</option>
                                <option>Observación adultos</option>
                            </select>        
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="noinventario">No. Inventario:</label>
                            <input id="noinventario" type="number" class="form-control" name="noinventario" for="noinventario"required autocomplete="noinventario" autofocus>   
                        </div>                       
                        <div class="col-md-6 mb-3">
                            <label for="prioridad">Prioridad:</label>
                            <select class="form-control" name="prioridad" id="prioridad">
                                <option>Baja</option>
                                <option>Media</option>
                                <option>Alta</option>
                            </select>        
                        </div> 
                    </div>
                    <input type="submit" class="btn btn-primary" value="Guardar">    
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection