
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos recibidos</title>
</head>
<body>
    <?php
   

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email'])) {
        echo "<h1>Los datos enviados han sido recibidos correctamente, ¡Bienvenido!</h1>";
        $email = htmlspecialchars($_POST['email']);
        echo "<p>El correo recibido es: <strong>$email</strong></p>";
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
    .debug-info {
        margin: 20px;
        padding: 20px;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
    }
    pre {
        background-color: #eee;
        padding: 10px;
        border-radius: 5px;
    }
</style>
</html>