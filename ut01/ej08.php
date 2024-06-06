
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 8 </title>
    </head>

    <body>
        <!-- Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar almacenada en una variable. -->
        <form name="form" method="GET">
            <label for="euros">Cantidad en euros</label>
            <input type="text" name="euros" id="euros">
            <input type="submit">
        </form>
        
        <?php
            $euros = $_GET['euros'] ?? null;
            $pesetas = $euros * 166.3860;
            echo "<p>$pesetas pesetas.</p>";
        ?>
    </body>

</html>