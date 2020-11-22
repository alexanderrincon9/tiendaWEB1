<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Productos</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="formularioProductos.php">Registro de Productos</a>
  <a class="navbar-brand" href="listarProductos.php">Catalogo de Productos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
    

<?php //Hacer una consulta en BD para traer todos los usuarios
 //1. Incluir el archivo donde esta nuestra clase BaseDatos
  include("BaseDatos.php"); 
  //2. Crear la consulta SQL para buscar datos 
  $consultaSQL="SELECT * FROM productos WHERE idProducto"; 
  //3.Crear un objeto de la clase BaseDato y usar el metodo buscarDatos 
  $transaccion=new BaseDatos(); 
  $productos=$transaccion->buscarDatos($consultaSQL); 
  //print_r($productos); ?>

  

    <header>
        
        <h1>CATALOGO DE PRODUCTOS</h1>
        <hr>
    </header>
    <main>
        <div class="container">
          <div class="form-register">
           <?php foreach($productos as $producto):?> 

            <div class="col mb-4"> 
              <div class="card h-100">         
                  <div class="card-body"> 
                    <p class="card-text"><?php echo($producto["nombre"])?></p> 
                    <p class="card-text"><?php echo($producto["marca"])?></p> 
                    <p class="card-text"><?php echo($producto["precio"])?></p> 
                    <p class="card-text"><?php echo($producto["descripcion"])?></p> 
                    <img src="<?php echo($producto["foto"])?>"class="card-img-top" alt="...">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">Editar</button>
                    <a href ="eliminarProductos.php?id=<?php echo($producto["idProducto"])?>" Class= "btn btn-danger">Eliminar</a>             
                  </div> 
              </div> 
                <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Editar Producto</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                             <form action="editarProductos.php?id=<?php echo($producto["idProducto"])?>"method="POST">
                                  <div class="form-group">
                                      <label>Nombre</label>
                                      <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombre"])?>">                              
                                  </div>
                                  <div class="form-group">
                                      <label>Marca</label>
                                      <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marca"])?>">                              
                                  </div>
                                  <div class="form-group">
                                      <label>Precio</label>
                                      <input type="text" class="form-control" name="precioEditar" value="<?php echo($producto["precio"])?>">                              
                                  </div>
                                  <div class="form-group">
                                      <label>Descripcion</label>
                                      <textarea class="form-control" name="descripcionEditar"><?php echo($producto["descripcion"])?></textarea>
                                  </div>
                                  <div class="form-group">
                                      <label>Foto</label>
                                      <textarea class="form-control" name="fotoEditar"><?php echo($producto["foto"])?></textarea>
                                  </div>
                                      <button type="submit" class="btn btn-info" name="botonEditar">Modificar</button>
                               </form>
                            </div>                        
                         </div>
                      </div>
                 </div>
                 
            </div> 
           <?php endforeach?> 
          </div>    
        </div>
      </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html> 