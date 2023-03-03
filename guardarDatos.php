<?php

include 'dbconnect.php';

$id = $_POST["id_f"];
$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$opcionales = $_POST["opcionales"];
$precio = $_POST["precio"];

$consulta = "UPDATE `pubs` SET  `titulo` = '$titulo', `descripcion` = '$descripcion', `opcionales` = '$opcionales', `precio` = '$precio' WHERE `pubs`.`id_pub` =" . $id. "";

if (mysqli_query($conn, $consulta)) {
    echo "Editado Exitosamente <a href='admin.php'>Inicio</a>";
} else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);








?>