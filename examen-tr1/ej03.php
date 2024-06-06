<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen de PHP: parte 3</title>
</head>

<body>
    <?php
        $manoJ1 = rand(0, 5);
        $manoJ2 = rand(0, 5);

        echo "<center><h1>PARES Y NONES</h1></center>";
        echo 
            "<center>
                <div>
                    <strong><span>Jugador 1 (pares)</span></strong>
                    <strong><span>Jugador 2 (impares)</span></strong>
                </div>
            </center>
            ";

        echo "<center><tr border>";
        if (($manoJ1+$manoJ2)%2==0) {
            echo "<td><img src='img03/gana.svg' alt='Gana' height='100'></td>";
            echo "<td><img src='img03/$manoJ1.svg' alt='3' height='200'></td>";
            echo "<td><img src='img03/$manoJ2.svg' alt='5' height='200'></td>";
            echo "<td><img src='img03/pierde.svg' alt='Pierde' height='100'></td>";
        } else {
            echo "<td><img src='img03/pierde.svg' alt='Gana' height='100'></td>";
            echo "<td><img src='img03/$manoJ1.svg' alt='3' height='200'></td>";
            echo "<td><img src='img03/$manoJ2.svg' alt='5' height='200'></td>";
            echo "<td><img src='img03/gana.svg' alt='Pierde' height='100'></td>";
        }
        echo "</tr></center>";

        echo "<br/><center><button onclick='location.reload()'>Nueva partida</button></center>"
    ?>
</body>

</html>