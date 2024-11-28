<!DOCTYPE html>
<html lang="es">
<head>
    <link rel='stylesheet' href='css\styke.css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
</head>
<body>
    <h1>Formulario de Registro de Estudiantes</h1>
    <form action="procesar.php" method="POST">
        <label for="nombre">Nombre completo:</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="edad">Edad:</label><br>
        <input type="number" id="edad" name="edad"><br><br>

        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="curso">Curso:</label><br>
        <select id="curso" name="curso">
            <option value="Matemáticas">Matemáticas</option>
            <option value="Ciencias">Ciencias</option>
            <option value="Literatura">Literatura</option>
        </select><br><br>

        <label for="genero">Género:</label><br>
        <select id="genero" name="genero">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select><br><br>

        <label for="intereses">Áreas de interés:</label><br>
        <select id="intereses" name="intereses[]" multiple size="4">
            <option value="Tecnología">Tecnología</option>
            <option value="Arte">Arte</option>
            <option value="Deportes">Deportes</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Música">Música</option>
        </select><br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
