<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Solución del ejercicio 10</title>
</head>

<body>
    <!-- Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo. -->
    
    <?php

        
        if (!isset($_POST['numero'])) {
            $numero = 0;
            $suma = 0;
            $introducidos = 0;
        } else {
            $numero = $_POST['numero'];
            $suma = $_POST['suma'];
            $introducidos = $_POST['introducidos'];
        }

        if ($numero >= 0) {
            $suma += $numero;
            $introducidos += 1;
            echo
            "
                <p>Programa que calcula la media de los números introducidos. Introduce un valor negativo para terminar la introducción.</p>
                <form method='POST'>
                    <label>Introduce un número:</label>
                    <input type='number' name='numero' required autofocus>
                    <input type='hidden' name='suma' value='$suma'>
                    <input type='hidden' name='introducidos' value='$introducidos'>
                    <input type='submit' value='Enviar'>
                </form>
            ";
        } else {
            $media = $suma/($introducidos-1);
            echo "<p>La media de los números introducidos es $media.</p>";
        }
        echo "<br><br>";
    ?>
    <a href="./ej10.php">Reiniciar.</a>
    <br><br>
    <a href="./">Volver atrás.</a>
</body>

</html>