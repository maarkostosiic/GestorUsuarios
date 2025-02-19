<?php
echo "Bienvenido al Gestor de Usuarios";

// Formulario de registro
echo '<form method="post" action="registro.php">
        Nombre: <input type="text" name="nombre"><br>
        Email: <input type="email" name="email"><br>
        Contraseña: <input type="password" name="contrasena"><br>
        <input type="submit" value="Registrar">
      </form>';

// Validación de campos vacíos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['contrasena'])) {
        echo "Por favor, rellene todos los campos.";
    } else {
        // Lógica para registrar al usuario (Aquí podrías agregar tu base de datos o lógica de registro)
        echo "Usuario registrado correctamente.";
    }
}
?>

