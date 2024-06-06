<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 2 </title>
    </head>

    <body>
        <!-- Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle while . -->

        <div>
            <?php
                $escrito = 0;
                $i = 0;
                while ($i <= 100) {
                    if ($escrito==5) {
                        $escrito = 0;
                        echo "<br/>";
                    }
                    if ($i%5==0) {
                        if ($i<10)
                            echo "<span>0$i </span>";
                        else
                            echo "<span>$i </span>";
                        $escrito += 1;
                    }  
                    $i += 1;                  
                }
                echo "<br/><br/>";
            ?>
            <a href="./">Volver atrás.</a>
        </div>
    </body>

</html>