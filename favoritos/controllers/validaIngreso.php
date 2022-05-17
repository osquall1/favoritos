<?php

extract ($_REQUEST);
require "../models/conexionPDO.php";
/* los variables que viene del formulario son: $login, $password */

/*asigno a la variable password el valor encriptado de lo que colocaron
en el password del formulario, ya que así esta en la base de datos  nos confundird */ 
$pass = hash('sha256', $_POST['pass']);
$login = $_REQUEST['login'];
$objConexion=Conectarse();
// Vamos a realizar el proceso para consultar 
//Guardamos en una variable la sentencia sql
$sql="select * from users where email = '$login' and password = '$pass'";
//Asignar a una variable el resultado de la consulta
$resultado=$objConexion->query($sql);
//verifico si existe el usuario
$existe = $resultado->num_rows;

if ($existe==1)  //quiere decir que los datos estan bien
{
	$usuario=$resultado->fetch_object();
        session_start();
	$_SESSION['user']= $usuario->name;	
	header('Location: ../vista/mainmenu.php');
	
}
else
{
   echo"<script>  alert('Usuario o clave incorrecta. Vuelva a digitarlos por favor, si no esta registrado por favor ingresar al registro'); window.location.href='../vista/registro.php'; </script>";
}

?>