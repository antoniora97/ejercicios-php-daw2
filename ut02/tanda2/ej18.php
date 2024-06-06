<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 18 </title>
    </head>

    <body>
        <!-- Realiza un programa que nos diga cuántos dígitos tiene un número entero que puede ser positivo o negativo. Se permiten números de hasta 5 dígitos. -->

        <form action="" method="GET">
            <label for="n">Número</label>
            <input type="number" name="n" id="n" min="-99999" max="99999">
            <input type="submit">
        </form>

        <?php
            $n = $_GET['n'] ?? 0;
            $copia_n = $n;
            $digitos = 0;

            while (true) {
                $digitos += 1;
                if (intval($copia_n/10)==0) {
                    echo "<p>El número $n tiene $digitos cifras.</p>";
                    break;
                }
                $copia_n = intval($copia_n/10);
            }
        ?>
    </body>

</html>