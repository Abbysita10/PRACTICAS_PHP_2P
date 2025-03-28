<?php
//** Ingresas 3 numeros enteros diferentes para que despues el sistema 
// realice el proceso para devolver el numero mayor */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 21</title>
</head>
<body>
    <header>
        <main>
            <section>
                <center>
            <br><br><h1 style="color: #77DD77; font-size: 36px">NUMERO MAYOR DE 3</h1>
        <form action="" method= "POST">

            <label for= "Numero1" > Primer numero: </label>
            <input type="text" id="Numero1" name="Numero1"><br><br>

            <label for= "Numero2" > Segundo numero: </label>
            <input type="text" id="Numero2" name="Numero2"><br><br>

            <label for= "Numero3" > Tercer numero: </label>
            <input type="text" id="Numero3" name="Numero3"><br><br>
           
            <button type= "submit">Operar</button><br><br>
            
            
            <?php
// Solicitar los tres números
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['Numero1']) && (['Numero2']) &&(['Numero3'])){
        $num1 =$_POST['Numero1'];
        $num2 =$_POST['Numero2'];
        $num3 =$_POST['Numero3'];

// Determinar el mayor
if ($num1 > $num2 && $num1 > $num3) {
    $mayor = $num1;
} elseif ($num2 > $num1 && $num2 > $num3) {
    $mayor = $num2;
} else {
    $mayor = $num3;
}

// Imprimir el resultado
echo "El número mayor es: $mayor\n";
    }
}
?><br>
<a href="PRACT22.php">Ir a la siguiente</a>
</center>
            </section>
        </main>
        <footer><p>
            Abigahil Mendez Rodriguez</p>
        </footer>
    </header>
</body>
</html>