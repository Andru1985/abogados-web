<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");

    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Chatbot Admin</title>

<link rel="stylesheet" href="css/chatbot.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<!-- =========================================================
SIDEBAR
========================================================= -->

<div class="sidebar">

    <h2>⚖ Admin Jurídico</h2>

    <ul>

        <li>
            <a href="dashboard.php">
                <i class="fa-solid fa-chart-line"></i>
                Dashboard
            </a>
        </li>

        <li>
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
                <i class="fa-solid fa-credit-card"></i>
                Pagos
            </a>
        </li>

        <li class="active">
            <a href="chatbot.php">
                <i class="fa-solid fa-comments"></i>
                Chatbot
            </a>
        </li>

    </ul>

</div>

<!-- =========================================================
CONTENIDO
========================================================= -->

<div class="main">

    <div class="topbar">

        <h1>Chatbot Jurídico</h1>

    </div>

    <!-- CHAT -->

    <div class="chat-container">

        <div class="chat-box" id="chat-box">

            <div class="mensaje bot">
                Hola 👋 Bienvenido al panel del chatbot jurídico.
            </div>

        </div>

        <!-- INPUT -->

        <div class="chat-input">

            <input type="text"
            id="mensaje"
            placeholder="Escribe un mensaje...">

            <button onclick="enviarMensaje()">
                <i class="fa-solid fa-paper-plane"></i>
            </button>

        </div>

    </div>

</div>

<script src="js/chatbot.js"></script>

</body>
</html>