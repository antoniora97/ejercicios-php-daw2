<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Solución del ejercicio 11</title>
</head>

<body>
    <!-- Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos son negativos. -->
    
    <?php

        if (!isset($_POST['numero'])) {
            $numero = 0;
            $numerosIntroducidos = 0;
            $cantidadPares = 0;
            $cantidadImpares = 0;
        } else {
            $numero = $_POST['numero'];
            $numerosIntroducidos = $_POST['numerosIntroducidos'];
            $cantidadPares = $_POST['cantidadPares'];
            $cantidadImpares = $_POST['cantidadImpares'];
        }

        if ($numerosIntroducidos!=10) {
            $numerosIntroducidos += 1;
            if ($numero%2==0) $cantidadPares += 1;
            else $cantidadImpares += 1;
            echo 
                "
                <p>Programa que recoge 10 números enteros y determina cuántos son positivos y cuántos negativos</p>
                <form method='POST'>
                    <label for='numero'>Introduce un número</label>
                    <input type='number' name='numero' required autofocus>
                    <input type='hidden' name='numerosIntroducidos' value='$numerosIntroducidos'>
                    <input type='hidden' name='cantidadPares' value='$cantidadPares'>
                    <input type='hidden' name='cantidadImpares' value='$cantidadImpares'>
                    <input type='submit' value='Enviar'>
                </form>
                ";
        } else {
            echo "<p>Hay $cantidadPares números pares.</p>";
            echo "<p>Hay $cantidadImpares números impares.</p>";
        }
        
        echo "<br><br>";
    ?>
    <a href="./ej13.php">Reiniciar.</a>
    <br><br>
    <a href="./">Volver atrás.</a>
</body>

</html>