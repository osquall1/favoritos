<?php

if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "../models/conexionPDO.php";
$sentencia = $conn->prepare("DELETE FROM favorite WHERE id = ?;");
$resultado = $sentencia->execute([$id]);
if ($resultado === true) {
    header("Location: ../vista/mainmenu");
} else {
    echo "Algo salió mal";
}