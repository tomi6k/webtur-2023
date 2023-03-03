<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - WebTur</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

<div class="logo2">Bienvenido a</div>
    <div class="logo">WebTur</div>
            <br>
    <a href="login.php">Acceso</a> <br><br>
    <?php
    include 'dbconnect.php'; 

    $consult = "SELECT * FROM `pubs`";
    $result = mysqli_query($conn, $consult);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="caja">
                <div class="titulo"><?php echo $row["titulo"]; ?></div>
                <div class="precio">Precio: $<?php echo $row["precio"]; ?></div> <br>
                <div class="enlace"><a href="verpaquete.php?id=<?php echo $row['id_pub']; ?>">Ver más</a></div>
            </div>
            <?php
        }
    }
    ?>






    <!-- <div class="logo2">Bienvenido a</div>
<div class="logo">WebTur</div>
<?php
include 'dbconnect.php'; 

$consult = "SELECT * FROM `pubs`";
$result=mysqli_query($conn, $consult);

if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)) {
            echo $row["titulo"];  ?><br><?php   
            echo "Precio: $".$row["precio"];
            echo " <a href='verpaquete.php?id=$row[id_pub]'>Ver más</a>";
                # <a href=\"edit.php?id=$res[id]\">
}
}

?> -->
</body>
</html>