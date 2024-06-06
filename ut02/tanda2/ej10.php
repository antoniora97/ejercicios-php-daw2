<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Solución del ejercicio 10 </title>
</head>

<body>
    <!-- Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento. -->

    <form action="" method="post">
        Introduzca el número del mes en que nació (1-12):<br>
        <input type="number" min="1" max="12" name="mes" autofocus><br>
        Introduzca el día:<br>
        <input type="number" min="1" max="31" name="dia"><br>
        <input type="submit" value="Aceptar">
    </form>

    <?php
    $mes = $_POST['mes'];
    $dia = $_POST['dia'];

    switch ($mes) {
        case 1:
            if ($dia < 21) {
                $horoscopo = "capricornio";
            } else {
                $horoscopo = "acuario";
            }
            break;

        case 2:
            if ($dia < 20) {
                $horoscopo = "acuario";
            } else {
                $horoscopo = "piscis";
            }
            break;

        case 3:
            if ($dia < 21) {
                $horoscopo = "piscis";
            } else {
                $horoscopo = "aries";
            }
            break;

        case 4:
            if ($dia < 21) {
                $horoscopo = "aries";
            } else {
                $horoscopo = "tauro";
            }
            break;

        case 5:
            if ($dia < 20) {
                $horoscopo = "tauro";
            } else {
                $horoscopo = "géminis";
            }
            break;

        case 6:
            if ($dia < 22) {
                $horoscopo = "géminis";
            } else {
                $horoscopo = "cáncer";
            }
            break;

        case 7:
            if ($dia < 22) {
                $horoscopo = "cáncer";
            } else {
                $horoscopo = "Leo";
            }
            break;

        case 8:
            if ($dia < 24) {
                $horoscopo = "leo";
            } else {
                $horoscopo = "virgo";
            }
            break;

        case 9:
            if ($dia < 23) {
                $horoscopo = "virgo";
            } else {
                $horoscopo = "libra";
            }
            break;

        case 10:
            if ($dia < 23) {
                $horoscopo = "libra";
            } else {
                $horoscopo = "escorpio";
            }
            break;

        case 11:
            if ($dia < 23) {
                $horoscopo = "escorpio";
            } else {
                $horoscopo = "sagitario";
            }
            break;

        case 12:
            if ($dia < 21) {
                $horoscopo = "sagitario";
            } else {
                $horoscopo = "capricornio";
            }
            break;
    }

    echo "Su horóscopo es ", $horoscopo;
    ?>
</body>

</html>