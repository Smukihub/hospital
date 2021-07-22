<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 

<title>Lista de Usuarios</title>
</head>
<body>
   
 

    <div class="row justify-content-center">
        <h2 class="text-center">Lista de Usuarios</h2>
        <div class="col-md-8">
            <div class="card-body">
                
                <hr style="clear:both">
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
                        
                        <tr >
                            <td>{{$usuario->nombre}}</td>                
                            <td  data-original="{{$usuario->apellidop}}">{{$usuario->apellidom}}</td>
                            <td  data-original="{{$usuario->usuario}}">{{$usuario->usuario}}</td>
                            <td  data-original="{{$usuario->nivel}}">{{$usuario->nivel}}</td>
                            <td  data-original="{{$usuario->email}}">{{$usuario->email}}</td>
                           
                        </tr>
                 
                </tbody> 
                        
                      </tr>
                      
                    </tbody>
                  </table>        
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

 



