<link rel="stylesheet" href="css/contacto.css">
<nav>

        <a href="index.php">Inicio</a>

        <a href="servicios.php">Servicios</a>

        <a href="nosotros.php">Nosotros</a>

    </nav>


<section class="contact-section">

    <div class="contact-box">

        <h2>Contáctanos</h2>

        <p>
            Nuestro equipo jurídico está listo
            para ayudarte con tu caso.
        </p>

        <form action="guardar_consulta.php" method="POST">

            <input type="text"
            name="nombre"
            placeholder="Nombre completo"
            required>

            <input type="email"
            name="correo"
            placeholder="Correo electrónico"
            required>

            <input type="text"
            name="telefono"
            placeholder="Teléfono">

            <textarea
            name="mensaje"
            placeholder="Describe tu consulta jurídica"
            required></textarea>

            <button type="submit">

                Enviar Consulta

            </button>

        </form>

    </div>

</section>