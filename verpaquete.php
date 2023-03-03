<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - WebTur</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
 
<div class="container">
    <?php
    include 'dbconnect.php'; 
    
    $id = $_GET['id'];

    $selectDatos = "SELECT * FROM pubs WHERE id_pub = $id";
    $execute=mysqli_query($conn, $selectDatos);

    if(mysqli_num_rows($execute)> 0){
        while($row = mysqli_fetch_assoc($execute)) {
            ?>
            <div class="titulo"><?php echo $row["titulo"]; ?></div>
            <div><?php echo $row["descripcion"]; ?></div>
            <div><?php echo $row["opcionales"]; ?></div>
            <div class="precio">Precio: $<?php echo $row["precio"]; ?></div>
            <?php
        }
    }
    ?>
           <br><br> <a href="index.php">Inicio</a>
</div>


 
 
 
 
 
 
 
<?php 
//     include 'dbconnect.php'; 
    
//     $id = $_GET['id'];

//     $selectDatos = "SELECT * FROM pubs WHERE id_pub = $id";
//     $execute=mysqli_query($conn, $selectDatos);

// if(mysqli_num_rows($execute)> 0){
//     while($row = mysqli_fetch_assoc($execute)) {
//             echo $row["titulo"];  ?><br><?php   
//             echo $row["descripcion"];?><br><?php
//             echo $row["opcionales"]; ?><br><?php
//             echo "Precio: $".$row["precio"];?><br><?php

// }
// }

    
    ?>
</html>