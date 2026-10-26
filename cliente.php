<?php

session_start();

if(!isset($_SESSION['usuario'])){

    header("Location:login.php");

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Panel Cliente</title>

<style>

body{

    font-family:Arial;

    background:#f4f6f9;

    padding:50px;

}

.card{

    background:white;

    padding:40px;

    border-radius:20px;

    box-shadow:0 5px 20px rgba(0,0,0,.1);

}

h1{

    color:#0b1f3a;

}

a{

    display:inline-block;

    margin-top:20px;

    padding:15px 25px;

    background:#25D366;

    color:white;

    text-decoration:none;

    border-radius:10px;

}

</style>

</head>

<body>

<div class="card">

<h1>

👋 Bienvenido
<?php echo $_SESSION['usuario']; ?>

</h1>

<p>

Tu panel jurídico está activo.

</p>

<a href="citas.php">

📅 Agendar cita

</a>

<a href="logout.php">

🚪 Cerrar sesión

</a>

</div>

</body>
</html>