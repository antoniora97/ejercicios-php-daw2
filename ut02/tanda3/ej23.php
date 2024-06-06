<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Solución del ejercicio 23</title>
</head>

<body>
    <!-- Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado, el contador de los números introducidos y la media. -->
    
    <?php
        if (!isset($_POST['numero'])) {
            $numero = 0;
            $numerosIntroducidos = 0;
            $suma = 0;
        } else {
            $numero = $_POST['numero'];
            $numerosIntroducidos = $_POST['numerosIntroducidos'];
            $suma = $_POST['suma'];
        }

        if ($suma <= 10000) {
            $numerosIntroducidos += 1;
            $suma += $numero;
            echo 
                "
                <p>Programa que recoge una lista de números hasta que se introduzca un negativo.</p>
                <form method='POST'>
                    <label for='numero'>Introduce un número</label>
                    <input type='number' name='numero' required autofocus>
                    <input type='hidden' name='numerosIntroducidos' value='$numerosIntroducidos'>
                    <input type='hidden' name='suma' value='$suma'>
                    <input type='submit' value='Enviar'>
                </form>
                ";
        } else {
            $suma += $numero;
            $media = $suma / $numerosIntroducidos;
            echo "<p>La suma total es $suma.</p>";
            echo "<p>Se han introducido $numerosIntroducidos números.</p>";
            echo "<p>La media de los números es $media.</p>";
        }
        
        echo "<br><br>";
    ?>
    <a href="./ej23.php">Reiniciar.</a>
    <br><br>
    <a href="./">Volver atrás.</a>
</body>

</html>