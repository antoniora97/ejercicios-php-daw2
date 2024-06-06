<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ssolución del ejercicio 7</title>
</head>

<body>

    <!-- Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte. -->
    <?php
        if (!isset($_POST['oportunidades'])) {
            $numeroIntroducido = 0;
            $oportunidades = 3;
        } else {
            $oportunidades = $_POST['oportunidades'];
            $numeroIntroducido = $_POST['numeroIntroducido'];
        }

        $numeroSecreto = 1234;

        if ($oportunidades > 0) {
            if ($numeroIntroducido == $numeroSecreto) {
                echo "<p>La caja fuerte se ha abierto.</p>";
                echo '<img src="http://www.imagenesanimadas.net/Economia/Cajas-fuertes/Caja-fuerte-03.gif"/><br/>';
            } else {
                echo "<p>Te quedan ", $oportunidades, " oportunidades para abrir la caja fuerte.</p>";
                $oportunidades--;
                echo "<p>Introduce un número de cuatro cifras.</p>";
                echo '<form method="post">';
                echo '<input type="number" min=0 max=9999 name="numeroIntroducido" autofocus>';
                echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
                echo '<input type="submit" value="Continuar">';
                echo '</form>';
            }
        } else {
            echo "<p>Lo siento, has agotado todas tus oportunidades. La caja fuerte permanecerá cerrada.</p>";
        }
    ?>
    <br><br>
    <a href="./ej07.php">Reiniciar</a>
    <br><br>
    <a href="./">Volver atrás</a>
</body>

</html>