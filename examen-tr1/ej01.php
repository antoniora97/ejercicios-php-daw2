<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen de PHP: parte 1</title>
</head>

<body>
    <center>
        <h1>DisFruta con PHP</h1>
    </center>

    <h2>9 frutas</h2>

    <?php
        $frutas = [127815, 127816, 127817, 127818, 127819, 127820, 127821, 127822, 127823, 127824, 127825, 127826, 127827];
        $frutasMostradas = [];
        echo "<p style='font-size: 5rem'>";
        for ($i=1; $i<=9; $i+=1) {
            $randomPos = rand(0, 12);
            array_push($frutasMostradas, $frutas[$randomPos]);
            echo "&#$frutas[$randomPos]; ";
        }
        echo "</p>";
    ?>

    <h2>Resultados</h2>

    <?php
        $frutasMostradasSinDuplicados = array_count_values($frutasMostradas);
        for ($i=0; $i<count($frutasMostradasSinDuplicados); $i+=1) {
            $frutaActual = array_keys($frutasMostradasSinDuplicados)[$i];
            $aparicionesFrutaActual = $frutasMostradasSinDuplicados[array_keys($frutasMostradasSinDuplicados)[$i]];
            echo "<p>La fruta <span style='font-size: 2rem'>&#$frutaActual</span> está <strong>$aparicionesFrutaActual</strong> veces en la lista.</p>";
        }
    ?>

    <br>
        <center><button onclick="location.reload()">¡¡¡ DisFruta otra vez !!!</button></center>
    <br>

</body>

</html>