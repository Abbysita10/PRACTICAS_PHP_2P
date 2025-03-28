<?php
//* Este codigo determina si una persona es mayor de edad o menor de edad basado en su edad
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 28</title>
</head>
<body>
    <main>
    <center><br><br>
        <h1 style="color: #77DD77; font-size: 36px">MAYOR O MENOR DE EDAD</h1>
        <form action="" method="POST">
            <label for="edad">Ingresa tu edad:</label>
            <input type="number" id="edad" name="edad" required><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['edad'])) {
                $edad = $_POST['edad'];

                if ($edad >= 18) {
                    echo "Eres mayor de edad";
                } else {
                    echo "Eres menor de edad!";
                }
            }
        }
        ?><br><br>
        <a href="PRACT29.php">Ir a la siguiente</a><br>
        <a href="PRACT27.php">Regresar práctica</a></center>
    </main>
    <footer>Abigahil Mendez</footer>
</body>
</html>