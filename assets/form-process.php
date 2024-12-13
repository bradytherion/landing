<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos enviados del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Dirección de correo a la que se enviará el mensaje
    $to = "bbenavidescajas@gmail.com";  // Tu dirección de correo

    // Asunto del correo
    $email_subject = "Nuevo mensaje de $name: $subject";  // Asunto personalizado

    // Cuerpo del correo
    $email_body = "Has recibido un nuevo mensaje.\n\n".
                  "Nombre: $name\n".
                  "Correo: $email\n".
                  "Teléfono: $phone_number\n".
                  "Asunto: $subject\n\n".
                  "Mensaje: $message";

    // Encabezados del correo
    $headers = "From: $email";

    // Intentar enviar el correo
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "success";  // Si el correo se envía correctamente
    } else {
        echo "error";  // Si ocurre algún error al enviar el correo
    }
}
?>
