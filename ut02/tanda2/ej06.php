<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 6 </title>
    </head>

    <body>
        <!-- Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h. Aplica t = sqrt(2h/g), siendo g = 9.81m/s2 -->

        <form action="" method="GET">
            <label for="h">Altura (h)</label>
            <input type="number" name="h" id="h">
            <input type="submit">
        </form>

        <?php
            $h = $_GET['h'] ?? 1;
            $g = 9.81;
            $t = round(sqrt((2*$h)/$g), $precision = 2);
            echo "<p>Desde una altura de $h metros, el objeto tardará en caer $t segundos.</p>"; 
        ?>
    </body>

</html>