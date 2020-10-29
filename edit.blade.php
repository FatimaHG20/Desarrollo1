@extends('Layout.pie')
@section('pie')
@endsection
@extends('Layout.social')
@section('barra')
@endsection

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TOYPET| PRODUCTOS EDITAR</title>
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <link rel="stylesheet" href="{{asset('css/rows.css')}}">
      <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
      <link rel="icon" type="image/png" href="/images/patita.png" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>
   <body>
   <div class="naranja">

</div>
<!--Formulario-->
         <div class="container">

      

                  <div class="row1">
                  @if($errors->any())

                           <div class="alert alert-danger " style="width: 50%;  margin:auto;">
                           <p> <strong>Error</strong> Por favor haga el llenado correcto del formulario  </p>
                                 <ul>
                                 @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                 @endforeach
                                 </ul>
                           </div>
                           @endif



                    


                        <div class="column1">
                        <div class="titulo">
                           <br>
                           <h3> EDITAR INFORMACIÓN DE PRODUCTOS</h3> 
                        </div>
                           <div class="registro-form ">
                              <form method="POST" action="{{route('Productos.update', $producto->id)}}">
                             
                              @csrf
                              @method('PUT')
                                 <input type="text" name="nombre" class="form-control" placeholder="Nombre del producto" value="{{$producto->nombre}}" />
                                 <input type="text" name="proveedor" class="form-control" placeholder="Proveedor" value="{{ $producto->proveedor}}"  >
                                 <input type="text" name="marca" class="form-control" placeholder="Marca" value="{{ $producto->marca}}" />
                                 <input type="text" name="precio" class="form-control" placeholder="Precio" value="{{ $producto->precio }}">
                                 <input type="text" name="piezas" class="form-control" placeholder="Piezas" value="{{ $producto->piezas }}">
                                 <input type="submit" class="btn btn-warning text-center" value="Actualizar"> </button>
                              </form>
                           </div>
                        </div>

                        <div class="column2">
                                 <ul>
                                    <li>
                                       <a href="{{route('Productos.index')}}"> <button class="btn patitas btn-warning"> REGRESA </button> </a>
                                    </li>
                                   
                                 </ul>
                        </div>

                  </div>      
                  
         </div>

   </body>
</html>