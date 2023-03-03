<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paquete Turistico - WebTur</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <CENTER>
    <div class="logo">EDITAR PROGRAMA</div> <br>
    </CENTER>
    <?php 
        include 'dbconnect.php'; 

        $id = $_GET["id"];

        $consultDatos = "SELECT * FROM pubs WHERE id_pub = $id";
        $exeConsult = mysqli_query($conn, $consultDatos);
        
                    if(mysqli_num_rows($exeConsult)> 0){
                        while($row = mysqli_fetch_assoc($exeConsult)) {
                            $id= $row["id_pub"];
                            echo "<form action='guardarDatos.php' method='POST'>
                            <input type='text' name='titulo' value='" . $row['titulo'] . "'> <br>
                            <input type='text' name='descripcion' value='" . $row['descripcion'] . "'> <br>
                            <input type='text' name='opcionales' value='" . $row['opcionales'] . "'> <br>
                            <input type='text' name='precio' value='" . $row['precio'] . "'> <br>
                            <input type='hidden' name='id_f' value='" . $id . "'> <br>
                            <input type='submit' value='Guardar Cambios'>
                            </form>";
                      
                    }
                    }
                    ?>
                          <br><br>  <center><a href="admin.php">Volver</a></center>
            <!-- <form action="guardarDatos.php" method = "POST">
                <input type="text" name="titulo" value=.$row[titulo].> <br>
                <input type="text" name="descripcion" value=.$row[descripcion].> <br>
                <input type="text" name="opcionales" value=.$row[opcionales].> <br>
                <input type="text" name="precio" value=.$row[precio].> <br>
                <input type="submit" value="Guardar Cambios">
            </form> -->



</body>
</html>