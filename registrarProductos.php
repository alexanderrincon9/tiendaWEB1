
<?php 

include ("BaseDatos.php");

if(isset($_POST["botonRegistrar"]))
{ 
    //1.recibir datos:
    $nombre=$_POST["nombre"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];
    //2. sacar una copia de la calse BaseDatos
    $transaccion = new BaseDatos();
    //3.Crear la consulta SQL para agregar datos
    $consultaSQL="INSERT INTO productos (nombre, marca, precio, descripcion,foto) VALUES('$nombre','$marca','$precio','$descripcion','$foto')";
    //4.Llmar al metodo agregarDatos
    $transaccion->agregarDatos($consultaSQL);
    header("location:formularioProductos.php");






} 



?>
