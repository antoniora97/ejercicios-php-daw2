<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Solución	del ejercicio 7</title>
    </head>

    <body>
        <!-- Escribe un programa que calcule el total de una factura a partir de la base imponible. -->

        <form action="" method="GET">
            <label for="base">Base imponible</label>
            <input type="number" name="base" id="base">
            <input type="submit">
        </form>

        <?php
            $base = $_GET['base'] ?? 1;
            echo "<p>El total de la factura es de " . ($base*1.21) . "€";
        ?>
    </body>

</html>