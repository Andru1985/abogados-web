<?php

include("../conexion.php");

require __DIR__ . '/../vendor/autoload.php';
/* =========================================================
   SDK MERCADOPAGO
========================================================= */

MercadoPago\SDK::setAccessToken(

    "APP_USR-4465414105968263-052616-8ef90a260339e13bb0adfa03828040e6-3429516562"

);

/* =========================================================
   CREAR PREFERENCIA
========================================================= */

$preference = new MercadoPago\Preference();

$item = new MercadoPago\Item();

$item->title = "Asesoría Jurídica";

$item->quantity = 1;

$item->unit_price = 100000;

$preference->items = array($item);

$preference->save();

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Pago Jurídico</title>

<script src="https://sdk.mercadopago.com/js/v2"></script>

<style>

body{

    margin:0;
    padding:0;

    background:#f4f6f9;

    font-family:Arial;

    display:flex;

    justify-content:center;

    align-items:center;

    height:100vh;

}

.contenedor{

    width:400px;

    background:white;

    padding:40px;

    border-radius:20px;

    text-align:center;

    box-shadow:0 5px 25px rgba(0,0,0,.1);

}

h1{

    color:#0b1f3a;

    margin-bottom:20px;

}

p{

    color:#555;

    margin-bottom:30px;

}

.boton{

    display:inline-block;

    background:#009ee3;

    color:white;

    padding:15px 30px;

    border-radius:10px;

    text-decoration:none;

    font-size:18px;

}

.boton:hover{

    background:#007eb5;

}

</style>

</head>

<body>

<div class="contenedor">

    <h1>

        💳 Pago Jurídico

    </h1>

    <p>

        Realiza el pago seguro de tu asesoría legal.

    </p>

    <!-- BOTÓN -->

    <a
    class="boton"
    href="<?php echo $preference->init_point; ?>">

        Pagar Ahora

    </a>

</div>

</body>
</html>