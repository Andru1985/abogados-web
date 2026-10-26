```php
<?php

session_start();

include("../conexion.php");

/* =========================================================
   VALIDAR SESIÓN
========================================================= */

if(!isset($_SESSION['admin'])){

    header("Location: login.php");

    exit();
}

/* =========================================================
   CONSULTAR PAGOS
========================================================= */

$pagos = $conexion->query(

    "SELECT * FROM pagos
     ORDER BY id DESC"

);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Pagos | Panel Admin</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="css/pagos.css">

</head>

<body>

<!-- =========================================================
SIDEBAR
========================================================= -->

<div class="sidebar">

    <h2>⚖️ Admin Jurídico</h2>

    <a href="dashboard.php">

        <i class="fa fa-chart-line"></i>

        Dashboard

    </a>

    <a href="usuarios.php">

        <i class="fa fa-users"></i>

        Usuarios

    </a>

    <a href="citas.php">

        <i class="fa fa-calendar"></i>

        Citas

    </a>

    <a href="pagos.php">

        <i class="fa fa-credit-card"></i>

        Pagos

    </a>

    <a href="chatbot.php">

        <i class="fa fa-comments"></i>

        Chatbot

    </a>

    <a href="logout.php" class="logout">

        <i class="fa fa-right-from-bracket"></i>

        Salir

    </a>

</div>

<!-- =========================================================
MAIN
========================================================= -->

<div class="main">

    <!-- TOPBAR -->

    <div class="topbar">

        <h1>💳 Gestión de Pagos</h1>

        <a href="crear_pago.php" class="btn">

            <i class="fa fa-plus"></i>

            Nuevo Pago

        </a>

    </div>

    <!-- TABLA -->

    <div class="tabla-box">

        <table>

            <tr>

                <th>ID</th>

                <th>Cliente</th>

                <th>Servicio</th>

                <th>Valor</th>

                <th>Estado</th>

                <th>Fecha</th>

                <th>Acciones</th>

            </tr>

            <?php while($p = $pagos->fetch_assoc()){ ?>

            <tr>

                <td>

                    <?php echo $p['id']; ?>

                </td>

                <td>

                    <?php echo $p['cliente']; ?>

                </td>

                <td>

                    <?php echo $p['servicio']; ?>

                </td>

                <td>

                    $ <?php echo number_format($p['valor']); ?>

                </td>

                <td>

                    <span class="estado">

                        <?php echo $p['estado']; ?>

                    </span>

                </td>

                <td>

                    <?php echo $p['fecha']; ?>

                </td>

                <td>

                    <a href="editar_pago.php?id=<?php echo $p['id']; ?>"
                    class="editar">

                        <i class="fa fa-pen"></i>

                    </a>

                    <a href="eliminar_pago.php?id=<?php echo $p['id']; ?>"
                    class="eliminar"
                    onclick="return confirm('¿Eliminar pago?')">

                        <i class="fa fa-trash"></i>

                    </a>

                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>
```
