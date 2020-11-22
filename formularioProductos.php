<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso Productos</title>
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
    <header>
        <h1>REGISTRO DE PRODUCTOS</h1>
        <hr>
    </header>
    <main>
        <div class="container">
        <div class="form-register">
            <form action="registrarProductos.php" method="POST">
            
                <h1>PRODUCTOS</h1>
                
                <div class="row mt-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto" name="nombre">
                    </div>
                    </div>
                    <div class="row mt-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Marca" name="marca">
                    </div>
                    </div> 
                    <div class="row mt-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Precio" name="precio">
                    </div>
                    </div>
                
                
                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold">Descripción</label>
                        <textarea class="form-control" rows="6" name="descripcion"></textarea>
                    </div>
                </div>
                <div class="row mt-3"> 
                    <div class="col"> 
                        <label class="font-weight-bold">FOTO:</label> 
                        <input type="text" class="form-control" placeholder="Foto URL" name="foto"> 
                     </div> 
                </div>
                
                <button type="submit" class="btn btn-outline-dark" name="botonRegistrar">Registrar</button>
               
            </form>
        </div>
    
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html> 