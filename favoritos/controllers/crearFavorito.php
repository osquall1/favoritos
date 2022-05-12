<?php

require "../models/conexion.php";

$titulo = $_POST["titulo"];
$pagina = $_POST["pagina"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["category"];
$visible = $_POST["visible"];
$sentencia = "INSERT INTO favorite (title,url,description ,categoryAsoc ,visible) VALUES ('$titulo', '$pagina', '$descripcion', '$categoria','$visible')";
$resultado = mysqli_query($conexion, $sentencia);
if ($resultado === true) {    
echo"<script>  alert('se genero un nuevo registro'); window.location.href='../vista/mainmenu'; </script>";
   
}
  else  {  
  
     echo"<script>  alert(' NO se puedo procesar la solicitud'); window.location.href='../vista/mainmenu'; </script>";
}