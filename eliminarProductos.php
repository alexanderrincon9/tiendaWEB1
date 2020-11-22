<?php

include("BaseDatos.php");


// 0. Recibir el ID del registro a eliminar
 $id=$_GET["id"];
//1.Utilizar la base de datos (Sacarle copia a la clase)
$transaccion= new BaseDatos();
//2. crear la consulta para eliminar registros
$consultaSQL="DELETE FROM productos WHERE idProducto='$id'";
//3. Llamar y utilizar el metodo eliminarDatos
$transaccion->eliminarDatos($consultaSQL);

header("location:listarProductos.php");









?>