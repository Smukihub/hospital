@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar Equipo') }}</div>

                <div class="card-body">
                    <form action="/Equipos/{{$equipo->id}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" type="text" for="nombre" name="nombre" class="form-control" required autocomplete="nombre" autofocus value="{{$equipo->nombre}}">   
                        </div>                       
                        <div class="col-md-6 mb-3">
                            <label for="marca">Marca:</label>
                            <input id="marca" type="text" class="form-control" name="marca" required autocomplete="marca" autofocus value="{{$equipo->marca}}">      
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="modelo">Modelo:</label>
                            <input id="modelo" type="text" name="modelo" for="modelo" class="form-control" required autocomplete="modelo" value="{{$equipo->modelo}}" autofocus>   
                        </div>                       
                        <div class="col-md-6 mb-3">
                            <label for="noserie">No. Serie:</label>
                            <input id="noserie" type="number" class="form-control" name="noserie" required autocomplete="noserie" value="{{$equipo->noserie}}" autofocus>      
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fechaini">Fecha de inicio:</label>
                            <input id="fechaini" type="date" class="form-control" name="fechaini" for="fechaini" required autocomplete="fechaini" value="{{$equipo->fechaini}}" autofocus>   
                        </div>                       
                        <div class="col-md-6 mb-3">
                            <label for="fechafin">Fecha final:</label>
                            <input id="fechafin" type="date" name="fechafin" for="fechafin" class="form-control" name="fechafin" value="{{$equipo->fechafin}}" required autocomplete="fechafin" autofocus>      
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="periodo">Periodo:</label>
                            <select name="periodo" for="periodo "id="periodo">
                                @if ($equipo->periodo =="1")
                                    <option selected>1</option>
                                @else
                                    <option>1</option>
                                @endif
                                @if ($equipo->periodo=="2")
                                    <option selected>2</option>
                                @else
                                    <option>2</option>
                                @endif
                                @if ($equipo->periodo=="3")
                                    <option selected>3</option>
                                @else
                                    <option>3</option>
                                @endif
                            </select>   
                        </div>                       
                        <div class="col-md-6 mb-3">
                            <label for="area">Área:</label>
                            <select name="area" id="area">
                                @if ($equipo->area =="Urgencias")
                                    <option selected>Urgencias</option>
                                @else
                                    <option>Urgencias</option>
                                @endif
                                @if ($equipo->area=="Quirofano")
                                    <option selected>Quirofano</option>
                                @else
                                    <option>Quirofano</option>
                                @endif
                                @if ($equipo->area=="Laboratorio")
                                    <option selected>Laboratorio</option>
                                @else
                                    <option>Laboratorio</option>
                                @endif
                                @if ($equipo->area=="Rayos X")
                                    <option selected>Rayos X</option>
                                @else
                                    <option>Rayos X</option>
                                @endif
                                @if ($equipo->area=="Neonatos")
                                    <option selected>Neonatos</option>
                                @else
                                    <option>Neonatos</option>
                                @endif
                                @if ($equipo->area=="Hospitalización")
                                    <option selected>Hospitalización</option>
                                @else
                                    <option>Hospitalización</option>
                                @endif
                                @if ($equipo->area=="Ginecología")
                                    <option selected>Ginecología</option>
                                @else
                                    <option>Ginecología</option>
                                @endif
                                @if ($equipo->area=="Sala de shock")
                                    <option selected>Sala de shock</option>
                                @else
                                    <option>Sala de shock</option>
                                @endif
                                @if ($equipo->area=="Obervación adultos")
                                    <option selected>Obervación adultos</option>
                                @else
                                    <option>Obervación adultos</option>
                                @endif
                            </select>        
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="noinventario">No. Inventario:</label>
                            <input id="noinventario" type="number" class="form-control" name="noinventario" for="noinventario"required autocomplete="noinventario" autofocus value="{{$equipo->noinventario}}">   
                        </div>                       
                        <div class="col-md-6 mb-3">
                            <label for="prioridad">Prioridad:</label>
                            <select name="prioridad" id="prioridad">
                                @if ($equipo->prioridad =="1")
                                    <option selected>1</option>
                                @else
                                    <option>1</option>
                                @endif
                                @if ($equipo->prioridad =="2")
                                    <option selected>2</option>
                                @else
                                    <option>2</option>
                                @endif
                                @if ($equipo->prioridad =="3")
                                    <option selected>3</option>
                                @else
                                    <option>3</option>
                                @endif
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