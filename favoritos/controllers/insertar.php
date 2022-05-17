<?php

require "../models/conexionPDO.php";

$nombreUsuario = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["documento"];
$mail = $_POST["mail"];
$password = hash('sha256',$_POST["pass"]);
$sentencia = $conn->query("INSERT INTO users (name,lastName,documentNumber ,email ,password) VALUES ('$nombreUsuario', '$apellido', '$cedula', '$mail','$password')");
if (!empty($sentencia)) {    
echo"<script>  alert('se genero un nuevo usuario ingresar con el correo y las credenciales que se genero'); window.location.href='../index.php'; </script>";
   
}
  else  {  
  
     echo"<script>  alert(' NO se puedo procesar la solicitud'); window.location.href='../index.php'; </script>";
}
