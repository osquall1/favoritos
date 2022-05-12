<?php

require "../models/conexion.php";

$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];
$sentencia = "INSERT INTO categorias (type,name) VALUES ('$tipo', '$nombre')";
$resultado = mysqli_query($conexion, $sentencia);
if ($resultado === true) {    
echo"<script>  alert('se genero un nuevo registro'); window.location.href='../vista/category'; </script>";
   
}
  else  {  
  
     echo"<script>  alert(' NO se puedo procesar la solicitud')";die;
}