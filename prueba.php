<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

// Iniciar una nueva sesión de cURL
$ch = curl_init(API_URL);

// Configurar la opción para recibir el resultado y no mostrarlo en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la solicitud y guardar el resultado
$result = curl_exec($ch);

// Comprobar si hubo un error en la ejecución de cURL
if (curl_errno($ch)) {
    echo 'Error en cURL: ' . curl_error($ch);
} else {
    // Verificar la respuesta completa de la API (esto puede ser útil para la depuración)
    echo "Respuesta de la API: " . $result;

    // Intentar decodificar el JSON
    $data = json_decode($result, true);

    // Verificar si la decodificación fue exitosa
    if ($data === null) {
        echo "Error al decodificar JSON";
    } else {
        var_dump($data);
    }
}

// Cerrar la sesión de cURL
curl_close($ch);
?>