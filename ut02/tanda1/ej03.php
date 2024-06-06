
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 3 </title>
    </head>

    <body>
        <!-- Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir se deberá introducir por teclado. -->
        <form name="form" method="GET">
            <label for="pesetas">Cantidad en pesetas</label>
            <input type="text" name="pesetas" id="pesetas">
            <input type="submit">
        </form>

        <?php
            $pesetas = $_GET['pesetas'] ?? null;
            $euros = $pesetas / 166.3860;
            echo "<p>$euros euros.</p>";
        ?>
    </body>

</html>