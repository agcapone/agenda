<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guardar Usuario</title>
</head>
<body>
    <h1>Guardar Usuario</h1>
    <!-- Formulario para guardar usuario -->
    <form method="post" action="guardar.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
