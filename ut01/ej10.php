
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 10 </title>
    </head>

    <body>
        <!-- Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base de la pirámide debe estar formada por 9 asteriscos. -->

        <?php
            for ($i = 1; $i <= 9 ; $i++) {
                for ($j = 1; $j <= 9-$i; $j++) {
                    echo ".";
                }
                for ($j = 1; $j <= $i ; $j++) {
                    echo "*";
                }
                echo "<br/>";
            }
        ?>
    </body>

</html>