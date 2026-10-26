<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Nosotros | Camilo & Asociados</title>

    <link rel="stylesheet"
    href="css/nosotros.css">

</head>

<body>

<!-- =========================================================
     HEADER
========================================================= -->

<header>

    <div class="logo">

        ⚖️ Camilo & Asociados

    </div>

    <nav>

        <a href="index.php">Inicio</a>

        <a href="servicios.php">Servicios</a>

        <a href="nosotros.php">Nosotros</a>

        <a href="contacto.php">Contacto</a>

    </nav>

</header>

<!-- =========================================================
     HERO
========================================================= -->

<section class="hero">

    <div class="overlay">

        <div class="hero-content">

            <h1>

                Nuestra Firma Jurídica

            </h1>

            <p>

                Más de 15 años brindando asesoría legal
                profesional con excelencia y compromiso.

            </p>

        </div>

    </div>

</section>

<!-- =========================================================
     HISTORIA
========================================================= -->

<section class="historia">

    <div class="historia-img">

        <img
        src="img/avatar.png"
        alt="Bufete Jurídico">

    </div>

    <div class="historia-texto">

        <h2>

            Nuestra Historia

        </h2>

        <p>

            Camilo & Asociados nació con el objetivo
            de ofrecer soluciones jurídicas modernas,
            transparentes y efectivas para cada cliente.

        </p>

        <p>

            Nuestro equipo está conformado por abogados
            especializados en derecho penal, civil,
            laboral y familiar, comprometidos con la
            defensa de los derechos y la justicia.

        </p>

        <p>

            Trabajamos con ética profesional, experiencia
            y estrategias legales sólidas para brindar
            seguridad y confianza en cada proceso.

        </p>

    </div>

</section>

<!-- =========================================================
     VIDEO
========================================================= -->

<section class="video-section">

    <h2>

        Conoce Nuestro Bufete

    </h2>

    <div class="video-container">

        <video
        controls
        autoplay
        muted
        loop>

             <source
            src="video/bufete.mp4"
            type="video/mp4">


        </video>

    </div>

</section>


<!-- =========================================================
     EQUIPO
========================================================= -->

<section class="equipo">

    <h2>

        Nuestro Equipo

    </h2>

    <div class="equipo-grid">

        <!-- ABOGADO 1 -->

        <div class="card">

            <img src="img/imagen4.jpeg">

            <div class="card-content">

                <h3>

                    Camilo Rodríguez

                </h3>

                <p>

                    Especialista en Derecho Penal

                </p>

            </div>

        </div>

        <!-- ABOGADO 2 -->

        <div class="card">

            <img src="img/imagen1.jpeg">

            <div class="card-content">

                <h3>

                    Laura Gómez

                </h3>

                <p>

                    Especialista en Derecho Civil

                </p>

            </div>

        </div>

        <!-- ABOGADO 3 -->

        <div class="card">

            <img src="img/imagen2.jpeg">

            <div class="card-content">

                <h3>

                    Julián Leguízamo

                </h3>

                <p>

                    Especialista en Derecho Laboral

                </p>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     FOOTER
========================================================= -->

<footer>

    <p>

        © 2026 Camilo & Asociados
        - Todos los derechos reservados

    </p>

</footer>

<!-- =========================================================
     HEADER DINÁMICO
========================================================= -->

<script>

window.addEventListener("scroll", () => {

    document.querySelector("header")

    .classList.toggle(

        "active",

        window.scrollY > 50

    );

});

</script>
</body>
</html>