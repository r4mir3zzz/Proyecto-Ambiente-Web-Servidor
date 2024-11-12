<?php
include '../config/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name__message'];
    $email = $_POST['email__message'];
    $mensaje = $_POST['message_text'];

    $sql = "INSERT INTO Mensajes (nombre_mensaje, email_mensaje, mensaje) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $email, $mensaje);

    $stmt->close();
    $conn->close();
}

?>