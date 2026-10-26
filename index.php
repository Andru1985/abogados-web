<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Inicio | Bufete Jurídico</title>

    <!-- CSS -->

    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="css/chatbot.css">

</head>

<body>

<!-- =========================================================
     HEADER
========================================================= -->

<header id="header">

    <div class="logo">

        <h1>BUFETE JURÍDICO</h1>

    </div>

    <nav>

        <!-- CONEXION ENTRE PAGINAS -->

        <a href="index.php">Inicio</a>

        <a href="nosotros.php">Nosotros</a>

        <a href="servicios.php">Servicios</a>

        <a href="contacto.php">Contacto</a>


    </nav>

</header>

<!-- =========================================================
     HERO PRINCIPAL
========================================================= -->

<section class="hero">

    <div class="overlay">

        <div class="hero-content fade-in">

            <h2>
                Protección Legal Profesional
            </h2>

            <p>

                Defendemos tus derechos con experiencia,
                compromiso y soluciones jurídicas modernas.

            </p>

            <div class="hero-buttons">

                <a href="contacto.php">

                    <button class="btn">

                        Solicitar Consulta

                    </button>

                </a>

                <a href="servicios.php">

                    <button class="btn btn2">

                        Ver Servicios

                    </button>

                </a>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     ESTADISTICAS
========================================================= -->

<section class="estadisticas">

    <div class="stat zoom-in">

        <h2>+500</h2>

        <p>Casos Exitosos</p>

    </div>

    <div class="stat zoom-in">

        <h2>+10</h2>

        <p>Años de Experiencia</p>

    </div>

    <div class="stat zoom-in">

        <h2>24/7</h2>

        <p>Atención Legal</p>

    </div>

</section>

<!-- =========================================================
     SERVICIOS DESTACADOS
========================================================= -->

<section class="services">

    <h2 class="fade-in">

        Áreas Jurídicas

    </h2>

    <div class="cards">

        <!-- CARD -->

        <div class="card zoom-in">

            <h3>Derecho Penal</h3>

            <p>

                Defensa integral en procesos penales
                y representación judicial.

            </p>

            <a href="servicios.php">

                <button class="btn">

                    Más Información

                </button>

            </a>

        </div>

        <!-- CARD -->

        <div class="card zoom-in">

            <h3>Derecho Familiar</h3>

            <p>

                Divorcios, custodia,
                alimentos y conciliaciones.

            </p>

            <a href="servicios.php">

                <button class="btn">

                    Más Información

                </button>

            </a>

        </div>

        <!-- CARD -->

        <div class="card zoom-in">

            <h3>Derecho Empresarial</h3>

            <p>

                Asesoría legal para empresas,
                contratos y sociedades.

            </p>

            <a href="servicios.php">

                <button class="btn">

                    Más Información

                </button>

            </a>

        </div>

    </div>

</section>

<!-- =========================================================
     SECCION VIDEO
========================================================= -->

<section class="video-section">

    <h2 class="fade-in">

        Conoce Nuestro Bufete

    </h2>

    <div class="video-container zoom-in">

        <video controls>

        <source src="video/bufete2.mp4" type="video/mp4">

        </video>

    </div>

</section>

<!-- =========================================================
     NOSOTROS
========================================================= -->

<section class="contenido">

    <h1 class="fade-in">

        Experiencia y Compromiso

    </h1>

    <p class="fade-in">

        Nuestro equipo de abogados ofrece soluciones
        jurídicas profesionales con atención personalizada
        y acompañamiento constante.

    </p>

    <br>

    <a href="nosotros.php">

        <button class="btn">

            Saber Más

        </button>

    </a>

</section>

<!-- =========================================================
     GALERIA
========================================================= -->

<section class="galeria">

    <h2 class="fade-in">

        Nuestro Equipo

    </h2>

    <div class="galeria-container">

        <img src="img/abogado1.jpg" class="zoom-in">

        <img src="img/abogado2.jpg" class="zoom-in">

        <img src="img/abogado3.jpg" class="zoom-in">

    </div>

</section>

<!-- =========================================================
     CONTACTO RAPIDO
========================================================= -->

<section class="contacto-rapido">

    <h2 class="fade-in">

        ¿Necesitas Ayuda Legal?

    </h2>

    <p class="fade-in">

        Contáctanos ahora y recibe asesoría inmediata.

    </p>

    <a href="contacto.php">

        <button class="btn">

            Contactar Ahora

        </button>

    </a>

</section>

<!-- BOTÓN CHAT -->

<div class="chat-toggle" onclick="abrirChat()">

    <i class="fa-brands fa-whatsapp"></i>

</div>

<!-- CHAT -->

<div id="chat">

    <!-- HEADER -->

    <div class="chat-header">

        <div class="chat-info">

            ⚖️ Asistente Jurídico

        </div>

        <button onclick="cerrarChat()">

            ✖

        </button>

    </div>

    <!-- BODY -->

    <div id="chat-body">

        <div class="bot">

            👋 Hola, bienvenido al bufete jurídico.

        </div>

    </div>

    <!-- FOOTER -->

    <div class="chat-footer">

        <input
            type="text"
            id="mensaje"
            placeholder="Escribe aquí..."
        >

        <button onclick="enviarMensaje()">

            ➤

        </button>

    </div>

</div>

<!-- JS -->

<script src="js/chatbot.js"></script>
<!-- =========================================================
     FOOTER
========================================================= -->

<footer>

    <p>

        © 2026 Bufete Jurídico
        | Todos los derechos reservados

    </p>

</footer>

<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>

/* =========================================================
   HEADER SCROLL
========================================================= */

window.addEventListener("scroll", ()=>{

    const header = document.getElementById("header");

    if(window.scrollY > 50){

        header.classList.add("scrolled");

    }else{

        header.classList.remove("scrolled");

    }

});

/* =========================================================
   CHAT
========================================================= */

function abrirChat(){

    document
    .getElementById("chat")
    .classList.add("active");

}

function cerrarChat(){

    document
    .getElementById("chat")
    .classList.remove("active");

}

/* =========================================================
   MENSAJES
========================================================= */

function enviarMensaje(){

    const input = document.getElementById("mensaje");

    const mensaje = input.value.trim();

    const chatBody = document.getElementById("chat-body");

    if(mensaje === "") return;

    /* USER */

    const userDiv = document.createElement("div");

    userDiv.classList.add("user");

    userDiv.innerText = mensaje;

    chatBody.appendChild(userDiv);

    /* BOT */

    setTimeout(()=>{

        const botDiv = document.createElement("div");

        botDiv.classList.add("bot");

        botDiv.innerText =
        "Gracias por escribirnos. Un asesor responderá pronto.";

        chatBody.appendChild(botDiv);

        chatBody.scrollTop = chatBody.scrollHeight;

    },700);

    input.value = "";

}

/* =========================================================
   ENTER
========================================================= */

document
.getElementById("mensaje")
.addEventListener("keypress", function(e){

    if(e.key === "Enter"){

        enviarMensaje();

    }

});

/* =========================================================
   ANIMACIONES
========================================================= */

const elementos = document.querySelectorAll(
".fade-in, .zoom-in"
);

function mostrar(){

    elementos.forEach(el=>{

        const top = el.getBoundingClientRect().top;

        if(top < window.innerHeight - 100){

            el.classList.add("show");

        }

    });

}

window.addEventListener("scroll", mostrar);

mostrar();

</script>

</body>
</html>