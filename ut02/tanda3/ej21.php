<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Solución del ejercicio 21</title>
</head>

<body>
    <!-- Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares . El número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye en el cómputo. -->
    
    <?php

        if (!isset($_POST['numero'])) {
            $numero = 0;
            $numerosIntroducidos = 0;
            $maximoPar = 0;
            $cantidadImpares = 0;
            $sumaImpares = 0;
        } else {
            $numero = $_POST['numero'];
            $numerosIntroducidos = $_POST['numerosIntroducidos'];
            $maximoPar = $_POST['maximoPar'];
            $cantidadImpares = $_POST['cantidadImpares'];
            $sumaImpares = $_POST['sumaImpares'];
        }

        if ($numero >= 0) {
            $numerosIntroducidos += 1;
            if ($numero%2!=0) {
                $cantidadImpares += 1;
                $sumaImpares += $numero;
            }
            if ($numero>$maximoPar) $maximoPar = $numero;
            echo 
                "
                <p>Programa que recoge una lista de números hasta que se introduzca un negativo.</p>
                <form method='POST'>
                    <label for='numero'>Introduce un número</label>
                    <input type='number' name='numero' required autofocus>
                    <input type='hidden' name='numerosIntroducidos' value='$numerosIntroducidos'>
                    <input type='hidden' name='maximoPar' value='$maximoPar'>
                    <input type='hidden' name='cantidadImpares' value='$cantidadImpares'>
                    <input type='hidden' name='sumaImpares' value='$sumaImpares'>
                    <input type='submit' value='Enviar'>
                </form>
                ";
        } else {
            $mediaImpares = 0;
            $numerosIntroducidos -= 1;
            if ($cantidadImpares>0) $mediaImpares = $sumaImpares / $cantidadImpares;
            echo "<p>Se han introducido $numerosIntroducidos números.</p>";
            echo "<p>La media de los números impares es $mediaImpares.</p>";
            echo "<p>El máximo número de los pares es el $maximoPar.</p>";
        }
        
        echo "<br><br>";
    ?>
    <a href="./ej21.php">Reiniciar.</a>
    <br><br>
    <a href="./">Volver atrás.</a>
</body>

</html>