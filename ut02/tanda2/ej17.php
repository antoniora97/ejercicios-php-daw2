<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 17 </title>
    </head>

    <body>
        <!-- Escribe un programa que diga cuál es la primera cifra de un número entero introducido por teclado. Se permiten números de hasta 5 cifras. -->

        <form action="" method="GET">
            <label for="n">Número</label>
            <input type="number" name="n" id="n" min="-99999" max="99999">
            <input type="submit">
        </form>

        <?php
            $n = $_GET['n'] ?? 0;
            $copia_n = $n;

            while (true) {
                if (intval($copia_n/10)==0) {
                    echo "<p>La primera cifra del número $n es $copia_n.</p>";
                    break;
                }
                $copia_n = intval($copia_n / 10);
            }
        ?>
    </body>

</html>