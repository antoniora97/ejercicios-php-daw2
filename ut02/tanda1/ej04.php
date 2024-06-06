
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 4 </title>
    </head>

    <body>
        <!-- Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado. -->
        <form name="form" method="GET">
            <label for="x">x</label>
            <input type="number" id="x" name="x">
            <br/><br/>
            <label for="y">y</label>
            <input type="number" id="y" name="y">
            <br/><br/>
            <input type="submit">
        </form>

        <?php
            $x = $_GET['x'] ?? 0;
            $y = $_GET['y'] ?? 1;
            echo "<p>$x + $y = " . $x+$y . "</p>";
            echo "<p>$x - $y = " . $x-$y . "</p>";
            echo "<p>$x x $y = " . $x*$y . "</p>";
            echo "<p>$x / $y = " . $x/$y . "</p>";
        ?>
    </body>

</html>