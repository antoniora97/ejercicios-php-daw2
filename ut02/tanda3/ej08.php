<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Solución del ejercicio 8</title>
</head>

<body>
    <!-- Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una tabla (<table> en HTML). -->
    <?php
        if (!isset($_POST['numero'])) {
            echo 
                "
                <form method='POST'>
                    <p><strong>Tabla de multiplicar de un número introducido.</strong></p>
                    <label for='numero'>Introduce un número.</label>
                    <input type='number' name='numero' required>
                    <input type='submit' value='Enviar'>
                </form>
                "; 
        } else {
            $n = $_POST['numero'];
            echo "<p>Tabla de multiplicar del $n.</p>";
            for ($i = 1; $i <= 10; $i += 1) {
                $mult = $n*$i;
                echo "<p> > $n x $i = $mult</p>";
            }
        }
        echo "<br><br>";
    ?>
    <a href="./ej08.php">Reiniciar.</a>
    <br><br>
    <a href="./">Volver atrás.</a>
</body>

</html>