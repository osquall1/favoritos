<?php

require "../models/conexionPDO.php";

$titulo = $_POST["titulo"];
$pagina = $_POST["pagina"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["category"];
$visible = $_POST["visible"];
$sentencia = $conn->query("INSERT INTO favorite (title,url,description ,categoryAsoc ,visible) VALUES ('$titulo', '$pagina', '$descripcion', '$categoria','$visible')");
if (!empty($sentencia)) {    
echo"<script>  alert('se genero un nuevo registro'); window.location.href='../vista/mainmenu.php'; </script>";
}
  else  { 
  
     echo"<script>  alert(' NO se puedo procesar la solicitud'); window.location.href='../vista/mainmenu.php'; </script>";
}
