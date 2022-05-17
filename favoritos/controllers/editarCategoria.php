
<?php
#Salir si alguno de los datos no está presente
if (
    !isset($_POST["id"]) ||    
    !isset($_POST["nombre"]) ||    
    !isset($_POST["tipo"])
) {
   echo 'los datos consignados no coinciden'; exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "../models/conexionPDO.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];
$sentencia = $conn->prepare("UPDATE categorias SET type = ?,  name = ? WHERE id = ?;");
$resultado = $sentencia->execute([$tipo, $nombre, $id]); # Pasar en el mismo orden de los ?
if ($resultado === true) {
    header("Location: ../vista/category.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID ";
}