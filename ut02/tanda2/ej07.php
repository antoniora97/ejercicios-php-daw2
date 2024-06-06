<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 7 </title>
    </head>

    <body>
        <!-- Realiza un programa que calcule la media de tres notas. -->

        <form action="" method="GET">
            <label for="n2">Nota 1</label>
            <input type="number" name="n1" id="n1" min="0" max="10">
            <br><br>
            <label for="n2">Nota 2</label>
            <input type="number" name="n2" id="n2"
            min="0" max="10">
            <br><br>
            <label for="n3">Nota 3</label>
            <input type="number" name="n3" id="n3"
            min="0" max="10">
            <br><br>
            <input type="submit">
        </form>

        <?php
            $n1 = $_GET['n1'] ?? 1.0;
            $n2 = $_GET['n2'] ?? 1.0;
            $n3 = $_GET['n3'] ?? 1.0;
            echo "<p>La nota media es " . round(($n1+$n2+$n3)/3.0, $precision = 2) . ".</p>";
        ?>
    </body>

</html>