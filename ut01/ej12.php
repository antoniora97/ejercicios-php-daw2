<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Solución del ejercicio 12 </title>
</head>

<body>
    <!-- Igual que el programa anterior, pero esta vez la pirámide debe aparecer invertida, con el vértice hacia abajo. -->

    <?php
        for ($i = 1; $i <= 9; $i++) {
            for ($j = 1; $j < $i; $j++) {
                echo ".";
            }
            // Aquí irían los espacios en lugar de un ".", pero no se pintan en el html
            for ($j = 1; $j <= 9 - $i; $j++) {
                echo "*";
            }
            for ($j = 1; $j < $i; $j++) {
                echo ".";
            }
            echo "<br/>";
        }
    ?>
</body>

</html>