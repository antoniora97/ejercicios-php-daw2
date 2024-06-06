<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 9 </title>
    </head>

    <body>
        <!-- Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 13 πr 2 h. -->

        <form method="GET">
            <label for="r">Radio (r)</label>
            <input type="number" name="r" id="r">
            <br><br>
            <label for="h">Altura (h)</label>
            <input type="number" name="h" id="h">
            <br><br>
            <input type="submit">
        </form>

        <?php
            $r = $_GET['r'] ?? 0;
            $h = $_GET['h'] ?? 0;

            echo "<p>Volumen del cono = " . (13*pi()*$r*2*$h) . " cm<sup>3</sup>.</p>";
        ?>
    </body>

</html>