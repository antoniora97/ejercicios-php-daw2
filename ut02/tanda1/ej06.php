<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 6 </title>
    </head>

    <body>
        <!-- Escribe un programa que calcule el área de un triángulo. -->
        <form name="form" method="GET">
            <label for="h">h</label>
            <input type="number" id="h" name="h">
            <br/><br/>
            <label for="b">b</label>
            <input type="number" id="b" name="b">
            <br/><br/>
            <input type="submit">
        </form>

        <?php
            $h = $_GET['h'] ?? 0;
            $b = $_GET['b'] ?? 0;
            echo "<p>El área del triángulo con base $b y altura $h es de " . ($h*$b)/2 . " cm<sup>2</sup></p>";
        ?>
    </body>

</html>