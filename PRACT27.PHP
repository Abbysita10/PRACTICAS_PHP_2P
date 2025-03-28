<?php
//*Lo que este codigo realiza es resolver la ecuación para X.
//  La fórmula para obtener el valor de X es: 𝑋= −𝑏/a Si 𝑎=0,
// la ecuación no es válida, ya que no sería una ecuación de primer grado.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 27</title>
</head>
<body>
    <main>
    <center><br><br>
        <h1 style="color: #77DD77; font-size: 36px">ECUACION PRIMER GRADO</h1>
        <form action="" method="POST">
            <label for="a">Valor de a:</label>
            <input type="number" id="a" name="a" required><br><br>
            <label for="b">Valor de b:</label>
            <input type="number" id="b" name="b" required><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['a']) && isset($_POST['b'])) {
                $a = $_POST['a'];
                $b = $_POST['b'];

                if ($a == 0) {
                    echo "No es una ecuación de primer grado.";
                } else {
                    $x = -$b / $a;
                    echo "El valor de X es: " . $x;
                }
            }
        }
        ?><br><br>
        <a href="PRACT28.php">Ir a la siguiente</a><br>
        <a href="PRACT26.php">Regresar práctica</a></center>
    </main>
    <footer>Abigahil Mendez</footer>
</body>
</html>