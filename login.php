<?php

session_start();

if($usuario['rol'] == 'admin'){

    header("Location:admin/dashboard.php");

}else{

    header("Location:cliente.php");

}

/* =========================================================
   SOLO ADMIN
========================================================= */

if($_SESSION['rol'] != 'admin'){

    die("❌ Acceso denegado.");

}

?>

/* =========================================
   VALIDAR LOGIN
========================================= */

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $usuario = $_POST['usuario'];

    $password = $_POST['password'];

    /* USUARIO Y CONTRASEÑA */

    if($usuario == "admin" && $password == "1234"){

        $_SESSION['usuario'] = $usuario['nombre'];

        $_SESSION['rol'] = $usuario['rol'];

        header("Location:index.php");

        exit();

    }else{

        $error = "Usuario o contraseña incorrectos";

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet"
    href="css/login.css">

</head>

<body>

<!-- HEADER -->

<header>

    <h1>

        Bufete Jurídico

    </h1>

    <nav>

        <a href="index.php">

            Inicio

        </a>

        <a href="servicios.php">

            Servicios

        </a>

        <a href="contacto.php">

            Contacto

        </a>

        <a href="nosotros.php">

            Nosotros

        </a>

    </nav>

</header>

<!-- LOGIN -->

<section class="login-section">

    <div class="login-box">

        <h2>

            Iniciar Sesión

        </h2>

        <p>

            Accede al sistema jurídico

        </p>

        <!-- ERROR -->

        <?php

        if(isset($error)){

            echo "<p style='color:red;'>$error</p>";

        }

        ?>

        <!-- FORM -->

        <form method="POST">

            <input
            type="text"
            name="usuario"
            placeholder="Usuario"
            required>

            <input
            type="password"
            name="password"
            placeholder="Contraseña"
            required>

            <button type="submit">

                Ingresar

            </button>

        </form>

    </div>

</section>

</body>

</html>