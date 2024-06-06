<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen de PHP: parte 4</title>
</head>

<body>
    <h1>MUESTRA CARTAS (RESULTADO)</h1>
    
    <?php
        $numero = $_POST['numero'];
        $palo = $_POST['palos'];
        
        echo "<h2>$numero cartas de $palo.</p>";
        echo "<p>";
        $cartas = [];
        for ($i = 1; $i <= $numero; $i++) {
            $carta = rand(1, 10);
            echo "<img src='img04/$palo$carta.svg' alt='$numero' width='100'>";
        }
        echo "</p>";     
        echo "<a href='ej04-formulario.php'>Volver atrás.</a>";
    ?>
</body>

</html>