
```php id="4h95ol"
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
   CONSULTAR CITAS
========================================================= */

$citas = $conexion->query(

    "SELECT * FROM citas
     ORDER BY id DESC"

);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Citas | Panel Admin</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="css/citas.css">

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

        <h1>📅 Gestión de Citas</h1>

        <a href="crear_cita.php" class="btn">

            <i class="fa fa-plus"></i>

            Nueva Cita

        </a>

    </div>

    <!-- TABLA -->

    <div class="tabla-box">

        <table>

            <tr>

                <th>ID</th>

                <th>Cliente</th>

                <th>Correo</th>

                <th>Teléfono</th>

                <th>Fecha</th>

                <th>Estado</th>

                <th>Acciones</th>

            </tr>

            <?php while($c = $citas->fetch_assoc()){ ?>

            <tr>

                <td>

                    <?php echo $c['id']; ?>

                </td>

                <td>

                    <?php echo $c['nombre']; ?>

                </td>

                <td>

                    <?php echo $c['correo']; ?>

                </td>

                <td>

                    <?php echo $c['telefono']; ?>

                </td>

                <td>

                    <?php echo $c['fecha']; ?>

                </td>

                <td>

                    <span class="estado">

                        <?php echo $c['estado']; ?>

                    </span>

                </td>

                <td>

                    <a href="editar_cita.php?id=<?php echo $c['id']; ?>"
                    class="editar">

                        <i class="fa fa-pen"></i>

                    </a>

                    <a href="eliminar_cita.php?id=<?php echo $c['id']; ?>"
                    class="eliminar"
                    onclick="return confirm('¿Eliminar cita?')">

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
