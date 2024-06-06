<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 13 </title>
    </head>

    <body>
        <!-- Escribe un programa que ordene tres números enteros introducidos por teclado. -->

        <form action="" method="GET">
            <label for="n1">Número 1</label>
            <input type="number" name="n1" id="n1">
            <br><br>
            <label for="n2">Número 2</label>
            <input type="number" name="n2" id="n2">
            <br><br>
            <label for="n3">Número 3</label>
            <input type="number" name="n3" id="n3">
            <br><br>
            <input type="submit">
        </form>

        <?php
        $n1 = $_GET['n1'] ?? 0;
        $n2 = $_GET['n2'] ?? 0;
        $n3 = $_GET['n3'] ?? 0;
        $ordenados = array($n1, $n2, $n3);

        // mostramos array sin ordenar
        echo "<p>Has introducido ";
        for ($i = 0; $i < count($ordenados); $i += 1) {
            echo $ordenados[$i] . " ";
        }
        echo "</p>";

        //mostramos array ordenado
        sort($ordenados);
        echo "<p>Ordenados: ";
        for ($i = 0; $i < count($ordenados); $i += 1) {
            echo $ordenados[$i] . " ";
        }
        echo "</p>";
        ?>
    </body>

</html>