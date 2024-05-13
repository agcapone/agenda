<?php
// Incluir el archivo de conexión a la base de datos
include 'db_connect.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener y limpiar los datos del formulario
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $telefono = mysqli_real_escape_string($conn, $_POST['telefono']);

    // Depurar variables antes de la consulta SQL
    var_dump($nombre, $telefono);

    // Crear la consulta SQL para insertar los datos en la tabla 'usuarios'
    $query = "INSERT INTO usuarios (nombre, telefono) VALUES ('$nombre', '$telefono')";

    // Ejecutar la consulta
    if (mysqli_query($conn, $query)) {
        // Éxito al guardar los datos
        $message = "Datos guardados correctamente.";
    } else {
        // Error al ejecutar la consulta
        $error_message = "Error al guardar los datos: " . mysqli_error($conn);
        error_log($error_message); // Registrar el mensaje de error en el archivo de registro
    }
}
?>
