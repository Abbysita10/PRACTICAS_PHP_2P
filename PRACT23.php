<?php
//*Se requiere que el usuario ingreses un numero entero, 
// luego el sistema analiza y determina si el numero es múltiplo de 3 y de 5.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 23</title>
</head>
<body>
    <header>
    <center><br><br>
        <h1 style="color: #77DD77; font-size: 36px">MULTIPLO DE 3 Y 5</h1>
    </header>
    <main>
        <section><center>
            <form action="" method = "POST">
                <label for="numero">Ingresa el numero: </label>
                <input type="number" id="numero" name="numero"><br><br>
                <button type ="submit">Ver</button>
            </form></center><center><br>
            <?php

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $numero = $_POST['numero'];
            
        if ($numero % 3 == 0 && $numero % 5 == 0) {
            $mensaje = "El numero " . $numero . " es multiplo de 3 y 5";
        }else{
            $mensaje = "El numero " . $numero . " no es multiplo de 3 y 5";
        }
        echo $mensaje;
    }
        ?><br><br>
        <center>
        <a href="PRACT24.php">Ir a la siguiente</a><br>
        <a href="PRACT22.php">Regresar</a></center>
    </center>
    </center>
        </section>
    </main>
    <footer>
        Abigahil Mendez Rodriguez
    </footer>
</body>
</html>