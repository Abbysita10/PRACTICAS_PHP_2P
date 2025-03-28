<?php
//*En este codigo lo que se hace es que el sistema reciba 
// tres números enteros N1, N2, N3, y luego ordene esos 
// números en orden ascendente
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 26</title>
</head>
<body>
    <main>
    <center><br><br>
        <h1 style="color: #77DD77; font-size: 36px">NUMEROS ASCENDENTES</h1>
        <form action="" method="POST">
           
            <label for="num1">INGRESA NUMERO 1:</label>
            <input type="number" id="num1" name="num1" required><br><br>
            <label for="num2">INGRESA NUMERO 2:</label>
            <input type="number" id="num2" name="num2" required><br><br>
            <label for="num3">INGRESA NUMERO 3:</label>
            <input type="number" id="num3" name="num3" required><br><br>
            

            <button type="submit">Enviar</button><br><br>
</center>
<center>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
             
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];

                
                if($num1 <= $num2 && $num1 <= $num3){
                    $menor = $num1;
                } elseif($num2 <= $num1 && $num2 <= $num3){
                    $menor = $num2;
                }else{
                    $menor = $num3;
                }
                echo "El numero menor es: ". $menor . "<br>";
    
                if($num1 > $num2 && $num1 > $num3){
                    $mayor = $num1;
                } elseif($num2 > $num1 && $num2 > $num3){
                    $mayor = $num2;
                }else{
                    $mayor = $num3;
                }
                echo "El numero mayor es: ". $mayor ."<br>";

                $intermedio = $num1 + $num2 + $num3 - $mayor - $menor;
                echo "El número intermedio es: " . $intermedio . "<br>";
        
            }
        }
        ?><br><br>
        <a href="PRACT27.php">Ir a la siguiente</a><br>
        <a href="PRACT25.php">Regresar practica</a></center>
    </main>
    <footer>Abigahil Mendez</footer>
</body>
</html>