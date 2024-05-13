<?php
// Parámetros de conexión a la base de datos
$DB_HOST = "mariadb";
$DB_PORT = "3306";

$DB_USER = "alejandro";
$DB_PASSWORD = "123456";
$DB_NAME = "agenda";

// Crear la conexión a la base de datos
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

// Verificar la conexión
if (!$conn) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>
