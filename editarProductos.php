
<?php 

include ("BaseDatos.php");

if(isset($_POST["botonEditar"]))
{ 
    //1.recibir datos:
    $nombre=$_POST["nombreEditar"];
    $marca=$_POST["marcaEditar"];
    $precio=$_POST["precioEditar"];
    $descripcion=$_POST["descripcionEditar"];
    $foto=$_POST["fotoEditar"];
     //2. recibi el id del registro a actualizar
     $id=$_GET["id"];
    //3. sacar una copia de la calse BaseDatos
    $transaccion = new BaseDatos();
    //4.Crear la consulta SQL para agregar datos
    $consultaSQL="UPDATE productos SET nombre='$nombre',marca='$marca',precio='$precio',descripcion='$descripcion',foto='$foto' WHERE idProducto='$id'";
    //5.Llmar al metodo agregarDatos
    $transaccion->editarDatos($consultaSQL);
     //6. redireccion
     header("location:listarProductos.php");






} 



?>
