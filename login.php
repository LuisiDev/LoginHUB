<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = urlencode($_POST['usuario']);
    $contrasena = urlencode($_POST['contrasena']);

    $url = "https://atlantida2.mx/login.php?username=$usuario&password=$contrasena";

    $result = file_get_contents($url);

    if ($result === FALSE) {
        echo "Error al realizar la solicitud.";
    } else {
        $response = json_decode($result, true);
        if (is_array($response) && isset($response['success'])) {
            if ($response['success']) {
                if (isset($response['redirectUrl'])) {
                    header('Location: ' . $response['redirectUrl']);
                    exit;
                } else {
                    echo "Error: URL de redirección no proporcionada.";
                }
            } else {
                $errorMessage = isset($response['message']) ? $response['message'] : "Error desconocido.";
                echo "Inicio de sesión fallido: " . $errorMessage;
            }
        } else {
            echo "Respuesta inesperada del servidor.";
            echo $result;
        }
    }
}
?>
Seleccionar el input de usuario y contraseña de $result y enviarlo a la URL de inicio de sesión