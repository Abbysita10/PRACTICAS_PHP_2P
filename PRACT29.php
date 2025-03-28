<?php
//* Se requiere que el usuario ingrese un numero entero luego el sistema verifica y determina si es mayor o menor
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 29</title>
</head>
<body>
    <center>
    <main>
<header>
   <br><br><h1 style="color: #77DD77; font-size: 36px">INGRESA UN NUMERO</h1>
        </header>
        <main>
            <section>
            <form action="" method= "POST">
                <label for="numero">Ingresa un numero entero:</label>
                <input type="number" id="numero" name="numero" required><br><br>
           
                <button type="submit">Calcular</button> <br><br><br>
                
        </form>
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $numero = $_POST['numero'];

                if($numero> 0){
                    $resultado = $numero * 2;
                    echo"<p> El doble del numero es : $resultado </p> ";
                } elseif ($numero < 0){
                    $resultado = $numero * 3;
                    echo"<p> El triple del numero es : $resultado </p> ";
                }else{
                    echo "<p> El numero es neutro, el resultado es 0</p>";
                   
                }
               
            }
        ?>
        </section>
        </center>
        <center>
        <a href="PRACT28.php">Ir a la siguiente</a><br>
        <a href="PRACT30.php">Regresar</a>
        </center>
        </main>
<footer>Abigahil Mendez</footer>
</body>
</html>