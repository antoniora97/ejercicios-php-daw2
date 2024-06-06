<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 8 </title>
    </head>

    <body>
        <!-- Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien, notable o sobresaliente). -->

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
            $media = round(($n1+$n2+$n3)/3.0, $precision = 2);

            if ($media>=0 && $media<5.0) {
                echo "<p>La nota media es $media (insuficiente).</p>";
            } else if ($media>=5.0 && $media<6.0) {
                echo "<p>La nota media es $media (bien).</p>";
            } else if ($media>=6.0 && $media<=8.0) {
                echo "<p>La nota media es $media (notable).</p>";
            } else {
                echo "<p>La nota media es $media (sobresaliente).</p>";
            }
        ?>
    </body>

</html>