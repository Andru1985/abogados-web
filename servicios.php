<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Servicios - Bufete Jurídico</title>

<link rel="stylesheet" href="css/servicios.css">

</head>

<body>

<!-- HEADER -->

<header>

    <h1>Bufete Jurídico Camilo & Asociados</h1>

    <nav>

        <a href="index.php">Inicio</a>

        <a href="servicios.php">Servicios</a>

        <a href="contacto.php">Contacto</a>

    </nav>

</header>

<!-- ESPACIO HEADER -->

<div class="spacer"></div>

<!-- SERVICIOS -->

<section class="services-container">

    <h2>Nuestros Servicios</h2>

    <p>
        Ofrecemos asesoría legal especializada
        para personas y empresas.
    </p>

    <div class="services-grid">

        <!-- CARD 1 -->

        <div class="service-card">

            <div class="service-icon">⚖️</div>

            <h3>Derecho Penal</h3>

            <p>
                Defensa en procesos penales
                y asesoría jurídica especializada.
            </p>

            <button class="btn-service">

                Más Información

            </button>

        </div>

        <!-- CARD 2 -->

        <div class="service-card">

            <div class="service-icon">📜</div>

            <h3>Derecho Civil</h3>

            <p>
                Contratos, demandas y soluciones
                legales para particulares.
            </p>

            <button class="btn-service">

                Más Información

            </button>

        </div>

        <!-- CARD 3 -->

        <div class="service-card">

            <div class="service-icon">💼</div>

            <h3>Derecho Laboral</h3>

            <p>
                Defensa de trabajadores y
                asesoría empresarial laboral.
            </p>

            <button class="btn-service">

                Más Información

            </button>

        </div>

        <!-- CARD 4 -->

        <div class="service-card">

            <div class="service-icon">🏢</div>

            <h3>Derecho Empresarial</h3>

            <p>
                Asesoría jurídica integral
                para empresas y negocios.
            </p>

            <button class="btn-service">

                Más Información

            </button>

        </div>

        <!-- CARD 5 -->

        <div class="service-card">

            <div class="service-icon">🏠</div>

            <h3>Bienes Raíces</h3>

            <p>
                Compra, venta y litigios
                inmobiliarios especializados.
            </p>

            <button class="btn-service">

                Más Información

            </button>

        </div>

    </div>

</section>

<!-- FOOTER -->

<footer>

    <p>

        © 2026 Bufete Jurídico Camilo & Asociados
        - Todos los derechos reservados

    </p>

</footer>

<!-- SCRIPT -->

<script>

/* ANIMACIÓN TARJETAS */

const observer = new IntersectionObserver(entries => {

    entries.forEach(entry => {

        if(entry.isIntersecting){

            entry.target.classList.add("show");

        }

    });

});

document.querySelectorAll('.service-card')

.forEach(card => {

    observer.observe(card);

});

/* HEADER DINÁMICO */

window.addEventListener("scroll", () => {

    document.querySelector("header")

    .classList.toggle("scrolled", window.scrollY > 50);

});

</script>

</body>
</html>