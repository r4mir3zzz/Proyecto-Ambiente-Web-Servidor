<?php

$envPath = __DIR__ . '/.env';
if (file_exists($envPath)) {
    $variables = parse_ini_file($envPath);
    foreach ($variables as $key => $value) {
        putenv("$key=$value");
    }
}

$server = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db = getenv('DB_NAME');

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa!";
}
?>
