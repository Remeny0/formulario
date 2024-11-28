<!DOCTYPE html>
<html lang="es">
<head>
    <link rel='stylesheet' href='css\styke.css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Registro</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $edad = $_POST['edad'] ?? '';
    $email = $_POST['email'] ?? '';
    $curso = $_POST['curso'] ?? '';
    $genero = $_POST['genero'] ?? '';
    $intereses = $_POST['intereses'] ?? [];

    // Validación básica
    $errores = [];
    if (empty($nombre)) {
        $errores[] = "El nombre es obligatorio.";
    }
    if (empty($edad) || !is_numeric($edad) || $edad <= 0) {
        $errores[] = "La edad debe ser un número válido.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico no es válido.";
    }
    if (empty($curso)) {
        $errores[] = "Debe seleccionar un curso.";
    }
    if (empty($genero)) {
        $errores[] = "Debe seleccionar un género.";
    }

    if (!empty($errores)) {
        echo "<h1>Errores en el registro</h1>";
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        echo "<a href='index.php'>Volver al formulario</a>";
        exit;
    }

    // Mostrar datos ingresados
    echo "<h1>Datos del Estudiante</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Edad:</strong> $edad</p>";
    echo "<p><strong>Correo Electrónico:</strong> $email</p>";
    echo "<p><strong>Curso:</strong> $curso</p>";
    echo "<p><strong>Género:</strong> $genero</p>";

    if (!empty($intereses)) {
        echo "<p><strong>Áreas de interés:</strong> " . implode(", ", $intereses) . "</p>";
    } else {
        echo "<p><strong>Áreas de interés:</strong> Ninguna</p>";
    }

    echo "<a href='index.php'>Registrar otro estudiante</a>";
} else {
    echo "<h1>Acceso no permitido</h1>";
    echo "<a href='index.php'>Volver al formulario</a>";
}
?>
</body>
</html>
