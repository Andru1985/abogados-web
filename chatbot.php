
<?php

include_once __DIR__ . "/conexion.php";

/*
 * La clave se guarda en un archivo local que NO se sube a GitHub.
 * También se acepta la variable de entorno OPENAI_API_KEY.
 */
$apiKey = getenv("OPENAI_API_KEY") ?: "";

$archivoPrivado = __DIR__ . "/config_secrets.php";

if (file_exists($archivoPrivado)) {
    include $archivoPrivado;
}

if (!isset($apiKey) || $apiKey === "") {
    $apiKey = getenv("OPENAI_API_KEY") ?: "";
}

if (isset($_POST["mensaje"])) {

    $mensaje = trim($_POST["mensaje"]);
    $respuesta = "";

    if ($mensaje === "") {
        echo "Por favor, escribe tu consulta.";
        exit;
    }

    // RESPUESTAS RÁPIDAS
    if (stripos($mensaje, "hola") !== false) {

        $respuesta = "👋 Hola, bienvenido al bufete jurídico. ¿Cómo podemos ayudarte?";

    } elseif (stripos($mensaje, "precio") !== false) {

        $respuesta = "💰 Manejamos consultas sobre divorcios, demandas, derecho laboral, custodia y asesorías jurídicas.";

    } elseif (stripos($mensaje, "cita") !== false) {

        $respuesta = "📅 Agenda aquí: <a href='http://localhost/abogados-web/citas.php'>Abrir Agenda Jurídica</a>";

    } elseif (stripos($mensaje, "pago") !== false) {

        $respuesta = "💳 Realiza tu pago aquí: <a href='http://localhost/abogados-web/pagos/pago.php'>Ir a pagos</a>";

    } else {

        if ($apiKey === "") {
            $respuesta = "El chatbot con IA no está configurado. Por favor, contacta al administrador.";
        } else {

            $datos = [
                "model" => "gpt-3.5-turbo",
                "messages" => [
                    [
                        "role" => "system",
                        "content" => "Eres un asistente informativo de un bufete jurídico colombiano. Responde de forma clara y profesional sobre derecho colombiano. Aclara que la información es general y que los asuntos concretos requieren valoración de un abogado."
                    ],
                    [
                        "role" => "user",
                        "content" => $mensaje
                    ]
                ]
            ];

            $ch = curl_init("https://api.openai.com/v1/chat/completions");

            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($datos),
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/json",
                    "Authorization: Bearer " . $apiKey
                ],
                CURLOPT_CONNECTTIMEOUT => 10,
                CURLOPT_TIMEOUT => 45
            ]);

            $contenido = curl_exec($ch);
            $errorCurl = curl_error($ch);
            $codigoHTTP = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            curl_close($ch);

            $resultado = is_string($contenido)
                ? json_decode($contenido, true)
                : null;

            if ($errorCurl !== "") {
                error_log("Error de conexión del chatbot: " . $errorCurl);
                $respuesta = "No fue posible conectar con el servicio. Inténtalo nuevamente.";
            } elseif (
                $codigoHTTP >= 200 &&
                $codigoHTTP < 300 &&
                isset($resultado["choices"][0]["message"]["content"])
            ) {
                $respuesta = $resultado["choices"][0]["message"]["content"];
            } else {
                error_log("Error de OpenAI. Código HTTP: " . $codigoHTTP);
                $respuesta = "El servicio de respuestas no está disponible en este momento.";
            }
        }
    }

    // GUARDAR LA CONVERSACIÓN CON CONSULTA PREPARADA
    if (isset($conexion) && $conexion instanceof mysqli) {
        $stmt = $conexion->prepare(
            "INSERT INTO conversaciones (usuario_mensaje, bot_respuesta) VALUES (?, ?)"
        );

        if ($stmt) {
            $stmt->bind_param("ss", $mensaje, $respuesta);

            if (!$stmt->execute()) {
                error_log("No se pudo guardar la conversación.");
            }

            $stmt->close();
        }
    }

    // Mantiene los enlaces HTML de las respuestas rápidas.
    echo nl2br($respuesta);
}
?>
