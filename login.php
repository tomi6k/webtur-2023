<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WebTur</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    
    <a href="index.php">Inicio</a>
    <section id="login-form">
        <form action="validation-login-form.php" method="POST">
            <label for="usermane-label">Usuario</label> <br>
            <input type="text" name="username" placeholder="Usuario" required> <br>
            <label for="password-label">Contraseña</label> <br>
            <input type="password" name="password" placeholder="Contraseña" required><br><br>
            <input type="submit" value="Iniciar Sesion">

        </form>
    </section>


</body>
</html>