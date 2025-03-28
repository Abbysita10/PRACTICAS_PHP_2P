<?php
//*Se requiere que el usuario ingrese un numero entero N, luego el sistema verifica y 
// devuelve el doble o el triple del numero, por ejemplo, si es par te devuelve el doble y si
//  es impar te lo devuelve el triple
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 25</title>
</head>
<body>
  <center><br><br>
    <header><h1 style="color: #77DD77; font-size: 36px">DOBLE O TRIPLE</h1></header>
<main>
    <section>
      <form action="" method="POST">
    <label for="numero">Ingresa el numero: </label><br><br>
    <input type="numer" name="numero" id="numero"><br><br>
    <button type="submit">Verificar</button><br>
      </form>  <br>
    <?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $numero=$_POST['numero'];

        if($numero % 2==0){
            $resultado=$numero * 3;
            $mensaje="El numero es par, su triple es: ";
        }else{
            $resultado= $numero * 2;
            $mensaje="El numero es impar, su doble es: ";
        }
        echo "$mensaje $resultado";
     }
    ?><br>
      <a href="PRACT26.php">Ir a la siguiente</a><br>
      <a href="PRACT24.php">Regresar</a>
    </center>   </section>
</main>
<footer>Abigahil Mendez</footer> 
</body>
</html>
