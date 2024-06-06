<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 19 </title>
    </head>

    <body>
        <!-- Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa. Se permiten números de hasta 5 cifras. -->

        <form action="" method="GET">
            <label for="n">Número</label>
            <input type="number" name="n" id="n" min="0" max="99999">
            <input type="submit">
        </form>

        <?php
            $n = $_GET['n'] ?? 0;

            if ((string)$n == strrev((string)$n)) {
                echo "<p>El número $n es capicúa.</p>";
            } else {
                echo "<p>El número $n no es capicúa.</p>";
            }
        ?>
    </body>

</html>