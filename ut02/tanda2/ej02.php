<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 2 </title>
    </head>

    <body>
        <!-- Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5. respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado. -->

        <form action="" method="GET" name="form">
            <label for="hora">Introduce una hora (sin minutos)</label>
            <input type="number" name="hora" id="hora" min="1" max="24">
            <input type="submit">
        </form>

        <?php
            $numb = $_GET['hora'] ?? 1;
            if ($numb >= 6 && $numb <= 12) {
                echo "<p>Buenos días.</p>";
            } else if ($numb >= 13 && $numb <= 20) {
                echo "<p>Buenas tardes.</p>";
            } else {
                echo "<p>Buenas noches.</p>";
            }
        ?>
    </body>

</html>