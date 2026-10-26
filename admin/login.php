<?php

session_start();

include("../conexion.php");

if(isset($_POST['login'])){

    $correo = $_POST['correo'];

    $clave = $_POST['clave'];

    $sql = $conexion->query("
        SELECT * FROM usuarios
        WHERE correo='$correo'
    ");

    if($sql->num_rows > 0){

        $usuario = $sql->fetch_assoc();

        if($clave == $usuario['clave']){

            $_SESSION['admin'] = $usuario['nombre'];

            header("Location: dashboard.php");

            exit();

        }else{

            echo "Contraseña incorrecta";

        }

    }else{

        echo "Usuario no encontrado";

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Login</title>

<link rel="stylesheet" href="css/login.css">

</head>

<body>

<div class="login-box">

    <h1>Panel Admin</h1>

    <form method="POST">

        <input type="email"
        name="correo"
        placeholder="Correo">

        <input type="password"
        name="clave"
        placeholder="Contraseña">

        <button type="submit" name="login">
            Ingresar
        </button>

    </form>

</div>

</body>
</html>