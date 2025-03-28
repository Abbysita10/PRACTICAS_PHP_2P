<?php
//*Se requiere que el usuario ingrese un numero entero N, luego el sistema analiza y determina si el numero es par o impar
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 24</title>
</head>
<body>
    <header><br><br>
   <center> <h1 style="color: #77DD77; font-size: 36px"> PAR O IMPAR?</h1>  </header></center>
        <main>
            <section><center>
                <form action="" method="POST">
                <label for="numero">Ingresa el numero:</label><br><br>
                <input type="number" name="numero" id="numero">
                <button type="submit">Enviar</button><br><br>
                </form>
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                
                    $numero=$_POST['numero'];

                 if($numero % 2==0){
                    $mensaje="El numero " .$numero ." es par";
                }else{
                    $mensaje="El numero " .$numero ." es impar";
                 }
                 echo "$mensaje<br><br>";
                }
                ?>
                  <a href="PRACT25.php">Ir a la siguiente</a><br>
                  <a href="PRACT23.php">Regresar</a>
          </center>  </section>
        </main>
<footer>Abigahil Mendez</footer>
</body>
</html>