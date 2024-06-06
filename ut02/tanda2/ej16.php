<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 16 </title>
    </head>

    <body>
        <!-- Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado. -->

        <form action="" method="GET">
            <label for="n">Número</label>
            <input type="number" name="n" id="n">
            <input type="submit">
        </form>

        <?php
        $n = $_GET['n'] ?? 0;

        echo "<p>La última cifra del número introducido es " . $n % 10 . ".</p>";
        ?>
    </body>

</html>