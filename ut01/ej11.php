
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 11 </title>
    </head>

    <body>
        <!-- Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente el contorno hecho con asteriscos) -->

        <?php
            for ($i = 1; $i <= 9 ; $i++) {
                for ($j = 1; $j <= 9-$i; $j++) {
                    echo "*";
                }
                // Aquí irían los espacios en lugar de un ".", pero no se pintan en el html
                for ($j = 1; $j < $i * 2; $j++) {
                    echo " . ";
                }
                for ($j = 1; $j <= 9-$i; $j++) {
                    echo "*";
                }
                echo "<br/>";
            }
        ?>
    </body>

</html>