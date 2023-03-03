<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - WebTur</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <section id="adminpanel">
        <div class="logo">WebTur</div>
        <h2>Admin Panel</h2>
        <a href="index.php">HOME</a>
        <a href="add_pax.html">Nuevo pasajero</a>
        <a href="add_pub.php">Nuevo programa</a>
        <?php
 include 'dbconnect.php'; 

            $consultaDatos = "SELECT * FROM pubs";
            $exeConsulta = mysqli_query($conn, $consultaDatos);
        ?>
                <h4>Paquetes Publicados</h4>
            <section id="paqueteContenedor">
                  <?php
                    if(mysqli_num_rows($exeConsulta)> 0){
                        while($row = mysqli_fetch_assoc($exeConsulta)) {
                                echo " <div class='caja'>".$row["titulo"]." <a href='editarPaq.php?id=$row[id_pub]'>Editar</a> <br> </div>";
                    
                    }
                    }
                    ?>
            </section>

    </section>
</body>
</html>