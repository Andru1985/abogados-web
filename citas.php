<?php

include("conexion.php");

if(isset($_POST['agendar'])){

    $nombre = $_POST['nombre'];

    $telefono = $_POST['telefono'];

    $correo = $_POST['correo'];

    $fecha_cita = $_POST['fecha_cita'];

    $hora_cita = $_POST['hora_cita'];

    $asunto = $_POST['asunto'];

    $sql = "

    INSERT INTO citas(

        nombre,
        telefono,
        correo,
        fecha_cita,
        hora_cita,
        asunto

    )

    VALUES(

        '$nombre',
        '$telefono',
        '$correo',
        '$fecha_cita',
        '$hora_cita',
        '$asunto'

    )

    ";

    $conexion->query($sql);

    $mensaje = "✅ Cita agendada correctamente.";

}

?>

<!DOCTYPE html>
<html lang='es'>

<head>

<meta charset='UTF-8'>

<meta name='viewport' content='width=device-width, initial-scale=1.0'>

<title>Citas Jurídicas</title>

<style>

body{

    margin:0;
    padding:0;

    font-family:Arial;

    background:#f4f6f9;

}

.contenedor{

    width:90%;
    max-width:600px;

    margin:50px auto;

    background:white;

    padding:40px;

    border-radius:20px;

    box-shadow:0 5px 25px rgba(0,0,0,.1);

}

h1{

    text-align:center;

    color:#0b1f3a;

    margin-bottom:30px;

}

input,textarea{

    width:100%;

    padding:15px;

    margin-bottom:15px;

    border:1px solid #ddd;

    border-radius:10px;

    font-size:15px;

}

button{

    width:100%;

    padding:15px;

    border:none;

    background:#25D366;

    color:white;

    border-radius:10px;

    cursor:pointer;

    font-size:16px;

}

button:hover{

    background:#128C7E;

}

.alerta{

    background:#d4edda;

    color:#155724;

    padding:15px;

    border-radius:10px;

    margin-bottom:20px;

    text-align:center;

}

.whatsapp{

    display:block;

    text-align:center;

    margin-top:20px;

    background:#25D366;

    color:white;

    padding:15px;

    border-radius:10px;

    text-decoration:none;

}

</style>

</head>

<body>

<div class='contenedor'>

<h1>

📅 Agendar Cita Jurídica

</h1>

<?php
if(isset($mensaje)){
?>

<div class='alerta'>

<?php echo $mensaje; ?>

</div>

<?php } ?>

<form method='POST'>

<input
type='text'
name='nombre'
placeholder='Nombre completo'
required>

<input
type='text'
name='telefono'
placeholder='Teléfono'
required>

<input
type='email'
name='correo'
placeholder='Correo'
required>

<input
type='date'
name='fecha_cita'
required>

<input
type='time'
name='hora_cita'
required>

<textarea
name='asunto'
placeholder='Describe tu caso'
required></textarea>

<button
type='submit'
name='agendar'>

Agendar Cita

</button>

</form>

<a class='whatsapp'

href='https://wa.me/573222856453'

target='_blank'>

💬 Hablar por WhatsApp

</a>

</div>

</body>
</html>