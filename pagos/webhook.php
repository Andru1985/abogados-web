<?php

include("conexion.php");

require __DIR__ . '/vendor/autoload.php';

/* =========================================================
   MERCADOPAGO
========================================================= */

MercadoPago\SDK::setAccessToken(

    "APP_USR-4465414105968263-052616-8ef90a260339e13bb0adfa03828040e6-3429516562"

);

/* =========================================================
   RECIBIR JSON
========================================================= */

$data = json_decode(

    file_get_contents("php://input"),

    true

);

/* =========================================================
   VALIDAR
========================================================= */

if(isset($data['data']['id'])){

    $payment_id = $data['data']['id'];

    /* =====================================================
       OBTENER PAGO
    ===================================================== */

    $payment = MercadoPago\Payment::find_by_id(

        $payment_id

    );

    $estado = $payment->status;

    $monto = $payment->transaction_amount;

    /* =====================================================
       GUARDAR
    ===================================================== */

    $sql = "

    INSERT INTO pagos(

        payment_id,
        estado,
        monto

    )

    VALUES(

        '$payment_id',
        '$estado',
        '$monto'

    )

    ";

    $conexion->query($sql);

}