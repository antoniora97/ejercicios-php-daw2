<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 11 </title>
    </head>

    <body>
        <!-- Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que faltan para llegar a la medianoche. -->

        <form action="" method="GET">
            <label for="">Hora</label>
            <input type="time" name="hora">
            <input type="submit">
        </form>

        <?php
            $hora_actual = $_GET['hora'] ?? "24:00";
            $medianoche = "24:00";
            $segundos_medianoche = substr($medianoche, 0, 2) * 3600;
            $segundos_hora_actual = substr($hora_actual, 0, 2) * 3600 + substr($hora_actual, 3, 5) * 60;
            echo "<p>Quedan " . $segundos_medianoche - $segundos_hora_actual . " segundos hasta la medianoche.</p>";
        ?>
    </body>

</html>