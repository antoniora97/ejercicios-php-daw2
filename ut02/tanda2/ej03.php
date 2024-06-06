<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 3 </title>
    </head>

    <body>
        <!-- Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día de la semana. -->

        <form action="" method="GET" name="form">
            <label for="numero_dia">Introduce un número</label>
            <input type="number" name="numero_dia" id="numero_dia">
            <input type="submit">
        </form>

        <?php
            $dias_semana = array(1 => "lunes", 2 => "martes", 3 => "miércoles", 4 => "jueves", 5 => "viernes", 6 => "sábado", 7 => "domingo");
            $numero_dia = $_GET['numero_dia'] ?? 1;
            echo "<p>Es $dias_semana[$numero_dia].</p>";
        ?>
    </body>

</html>