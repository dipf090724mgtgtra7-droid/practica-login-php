<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre_empleado'] ?? '';
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmar = $_POST['confirmar_password'] ?? '';

    if (empty($nombre) || empty($usuario) || empty($password) || empty($confirmar)) {
        echo "<p style='color:red;'>Error: Todos los campos son obligatorios.</p>";
    } elseif (strlen($password) < 6) {
        echo "<p style='color:red;'>Error: La contraseña debe tener al menos 6 caracteres.</p>";
    } elseif ($password !== $confirmar) {
        echo "<p style='color:red;'>Error: Las contraseñas no coinciden.</p>";
    } else {
        echo "<p style='color:orange;'>Validaciones aprobadas. Falta encriptar.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Registro</title></head>
<body>
    <h2>Registro Base</h2>
    <form action="registro.php" method="POST">
        <input type="text" name="nombre_empleado" placeholder="Nombre completo"><br><br>
        <input type="text" name="usuario" placeholder="Usuario"><br><br>
        <input type="password" name="password" placeholder="Contraseña"><br><br>
        <input type="password" name="confirmar_password" placeholder="Confirmar contraseña"><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
