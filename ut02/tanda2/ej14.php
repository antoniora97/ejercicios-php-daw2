<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 14 </title>
    </head>

    <body>
        <!-- Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5. -->

        <form action="" method="GET">
            <label for="n">Número</label>
            <input type="number" name="n" id="n">
            <input type="submit">
        </form>

        <?php
            $n = $_GET['n'] ?? 0;

            if ($n%2==0) {
                echo "<p>El número $n es par.</p>";
            } else {
                echo "<p>El número $n es impar.</p>";
            }

            if ($n%5==0) {
                echo "<p>El número $n es divisible por 5.</p>";
            } else {
                echo "<p>El número $n no es divisible por 5.</p>";
            }
        ?>
    </body>

</html>