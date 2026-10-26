<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO clientes
(nombre, correo, telefono, mensaje)
VALUES
('$nombre','$correo','$telefono','$mensaje')";

if(mysqli_query($conn,$sql)){

    echo "
    <script>
    alert('Consulta enviada correctamente');
    window.location='contacto.php';
    </script>
    ";

}else{

    echo "Error";

}

?>