<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos recibidos</title>
</head>

<body>
    <h1>Los datos enviados han sido recibidos correctamente, ¡Bienvenido!</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);
        echo "<p>El correo recibido es: <strong>$email</strong></p>";
    } else {
        echo "<p>No se recibió ningún correo.</p>";
    }
    ?>
</body>
<style>
    h1 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 30px auto;
        padding: 24px 32px;
        max-width: 400px;
        background: #2cd882;
        border-radius: 12px;
        border-color: 5px black;
    }
</style>

</html>