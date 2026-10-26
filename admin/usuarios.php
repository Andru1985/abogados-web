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
   CONSULTAR USUARIOS
========================================================= */

$usuarios = $conexion->query("SELECT * FROM usuarios ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Usuarios | Panel Admin</title>

<link rel="stylesheet" href="css/usuarios.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<!-- =========================================================
SIDEBAR
========================================================= -->

<div class="sidebar">

    <h2>⚖ Panel Admin</h2>

    <ul>

        <li>
            <a href="dashboard.php">
                <i class="fa-solid fa-chart-line"></i>
                Dashboard
            </a>
        </li>

        <li class="active">
            <a href="usuarios.php">
                <i class="fa-solid fa-users"></i>
                Usuarios
            </a>
        </li>

        <li>
            <a href="citas.php">
                <i class="fa-solid fa-calendar"></i>
                Citas
            </a>
        </li>

        <li>
            <a href="pagos.php">
                <i class="fa-solid fa-money-bill"></i>
                Pagos
            </a>
        </li>

        <li>
            <a href="logout.php">
                <i class="fa-solid fa-right-from-bracket"></i>
                Cerrar sesión
            </a>
        </li>

    </ul>

</div>

<!-- =========================================================
CONTENIDO
========================================================= -->

<div class="main">

    <!-- HEADER -->

    <div class="topbar">

        <h1>Gestión de Usuarios</h1>

        <a href="crear_usuario.php" class="btn">
            <i class="fa-solid fa-plus"></i>
            Nuevo Usuario
        </a>

    </div>

    <!-- TABLA -->

    <div class="tabla-container">

        <table>

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Rol</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>

            </thead>

            <tbody>

            <?php while($row = $usuarios->fetch_assoc()){ ?>

                <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['nombre']; ?></td>

                    <td><?php echo $row['correo']; ?></td>

                    <td><?php echo $row['telefono']; ?></td>

                    <td>
                        <span class="rol">
                            <?php echo $row['rol']; ?>
                        </span>
                    </td>

                    <td><?php echo $row['fecha']; ?></td>

                    <td class="acciones">

                        <a href="editar_usuario.php?id=<?php echo $row['id']; ?>" class="editar">
                            <i class="fa-solid fa-pen"></i>
                        </a>

                        <a href="eliminar_usuario.php?id=<?php echo $row['id']; ?>"
                        class="eliminar"
                        onclick="return confirm('¿Eliminar usuario?')">

                            <i class="fa-solid fa-trash"></i>

                        </a>

                    </td>

                </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>