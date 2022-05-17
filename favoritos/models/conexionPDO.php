<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=internet_favoritos", $username, $password);
  // set the PDO error mode to exception
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

//conection for function
function Conectarse()
{
	$objConexion = new mysqli("localhost","root","","internet_favoritos");//aca la conexion con la BD esta sin contraseña
	 if ($objConexion->connect_error)
	{
		echo "Error de conexion a la Base de Datos ".$objConexion->connect_error;
		exit();
	}
	else
	{
		return $objConexion;
	}
}
?>
