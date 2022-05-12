<?php
#Salir si alguno de los datos no está presente
if (
    !isset($_POST["id"]) ||    
    !isset($_POST["titulo"]) ||    
    !isset($_POST["pagina"]) ||
    !isset($_POST["visible"]) ||
    !isset($_POST["category"]) ||
    !isset($_POST["descripcion"])
) {
   echo 'los datos consignados no coinciden'; exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "../models/conexionPDO.php";
$id = $_POST["id"];
$titulo = $_POST["titulo"];
$pagina = $_POST["pagina"];
$visible = $_POST["visible"];
$categoria= $_POST["category"];
$descripcion = $_POST["descripcion"];
$sentencia = $conn->prepare("UPDATE favorite SET title = ?,  url = ?, description = ?, categoryAsoc = ?, visible = ? WHERE id = ?;");
$resultado = $sentencia->execute([$titulo, $pagina, $descripcion, $categoria, $visible, $id]); # Pasar en el mismo orden de los ?
if ($resultado === true) {
    header("Location: ../vista/mainmenu");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID ";
}
