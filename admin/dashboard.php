
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
   CONTADORES
========================================================= */

$usuarios = $conexion->query(
    "SELECT COUNT(*) total FROM usuarios"
)->fetch_assoc()['total'];

$citas = $conexion->query(
    "SELECT COUNT(*) total FROM citas"
)->fetch_assoc()['total'];

$pagos = $conexion->query(
    "SELECT COUNT(*) total FROM pagos"
)->fetch_assoc()['total'];

$totalConversaciones = $conexion->query(
    "SELECT COUNT(*) total FROM conversaciones"
)->fetch_assoc()['total'];

/* =========================================================
   ÚLTIMOS USUARIOS
========================================================= */

$usuarios_recientes = $conexion->query(
    "SELECT * FROM usuarios
     ORDER BY id DESC
     LIMIT 5"
);

/* =========================================================
   ÚLTIMAS CITAS
========================================================= */

$citas_recientes = $conexion->query(
    "SELECT * FROM citas
     ORDER BY id DESC
     LIMIT 5"
);

/* =========================================================
   ÚLTIMAS CONVERSACIONES
========================================================= */

$conversaciones = $conexion->query(
    "SELECT * FROM conversaciones
     ORDER BY id DESC
     LIMIT 5"
);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Dashboard Jurídico</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="css/dashboard.css">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

    <a href="logout.php">
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

        <div class="buscar">

            <input
            type="text"
            placeholder="Buscar...">

        </div>

        <div class="top-right">

            <div id="reloj"></div>

            <img
            src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
            class="admin-img">

        </div>

    </div>

    <!-- TITULO -->

    <h1>

        📊 Panel Administrativo Premium

    </h1>

    <br>

    <!-- =========================================================
    CARDS
    ========================================================= -->

    <div class="cards">

        <div class="card">

            <i class="fa fa-users"></i>

            <h2><?php echo $usuarios; ?></h2>

            <p>Usuarios Registrados</p>

        </div>

        <div class="card">

            <i class="fa fa-calendar"></i>

            <h2><?php echo $citas; ?></h2>

            <p>Citas Agendadas</p>

        </div>

        <div class="card">

            <i class="fa fa-credit-card"></i>

            <h2><?php echo $pagos; ?></h2>

            <p>Pagos Recibidos</p>

        </div>

        <div class="card">

            <i class="fa fa-robot"></i>

            <h2><?php echo $totalConversaciones; ?></h2>

            <p>Conversaciones IA</p>

        </div>

    </div>

    <!-- =========================================================
    GRAFICA
    ========================================================= -->

    <div class="grafica">

        <canvas id="miGrafica"></canvas>

    </div>

    <!-- =========================================================
    ACTIVIDAD
    ========================================================= -->

    <div class="actividad">

        <!-- USUARIOS -->

        <div class="tabla-box">

            <h2>👥 Últimos Usuarios</h2>

            <table>

                <tr>

                    <th>Nombre</th>

                    <th>Correo</th>

                </tr>

                <?php while($u = $usuarios_recientes->fetch_assoc()){ ?>

                <tr>

                    <td><?php echo $u['nombre']; ?></td>

                    <td><?php echo $u['correo']; ?></td>

                </tr>

                <?php } ?>

            </table>

        </div>

        <!-- CITAS -->

        <div class="tabla-box">

            <h2>📅 Últimas Citas</h2>

            <table>

                <tr>

                    <th>Cliente</th>

                    <th>Fecha</th>

                </tr>

                <?php while($c = $citas_recientes->fetch_assoc()){ ?>

                <tr>

                    <td><?php echo $c['nombre']; ?></td>

                    <td><?php echo $c['fecha']; ?></td>

                </tr>

                <?php } ?>

            </table>

        </div>

    </div>

    <!-- =========================================================
    CHATBOT
    ========================================================= -->

    <div class="tabla-chat">

        <h2>🤖 Conversaciones IA</h2>

        <table>

            <tr>

                <th>Usuario</th>

                <th>Respuesta</th>

            </tr>

            <?php while($chat = $conversaciones->fetch_assoc()){ ?>

            <tr>

                <td><?php echo $chat['usuario_mensaje']; ?></td>

                <td><?php echo $chat['bot_respuesta']; ?></td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

<!-- =========================================================
JAVASCRIPT
========================================================= -->

<script>

/* =========================================================
   GRAFICA
========================================================= */

const ctx = document
.getElementById('miGrafica');

new Chart(ctx, {

    type:'bar',

    data:{

        labels:[
            'Usuarios',
            'Citas',
            'Pagos',
            'Chatbot'
        ],

        datasets:[{

            label:'Estadísticas',

            data:[
                <?php echo $usuarios; ?>,
                <?php echo $citas; ?>,
                <?php echo $pagos; ?>,
                <?php echo $totalConversaciones; ?>
            ],

            borderWidth:1

        }]

    },

    options:{
        responsive:true
    }

});

/* =========================================================
   RELOJ
========================================================= */

function actualizarReloj(){

    let ahora = new Date();

    let hora = ahora.toLocaleTimeString();

    document.getElementById(
        "reloj"
    ).innerHTML = hora;

}

setInterval(actualizarReloj,1000);

</script>

</body>
</html>
