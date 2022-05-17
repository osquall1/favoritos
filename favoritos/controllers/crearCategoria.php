<?php

require "../models/conexionPDO.php";

$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];
$sentencia = $conn->query("INSERT INTO categorias (type,name) VALUES ('$tipo', '$nombre')");
if (!empty($sentencia)) {    
echo"<script>  alert('se genero un nuevo registro'); window.location.href='../vista/category.php'; </script>";
   
}
  else  {  
  
     echo"<script>  alert(' NO se puedo procesar la solicitud')";die;
}