<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 10 </title>
    </head>

    <body>
        <!-- Realiza un conversor de Kb a Mb. -->

        <form action="" method="GET" name="form">
            <label for="kb">Kb</label>
            <input type="number" name="kb" id="kb">
            <input type="submit">
        </form>

        <?php
            $kb = $_GET['kb'] ?? 0;
            echo "<p>$kb Kb = " . $kb/1000 . "Mb.</p>";
        ?>
    </body>

</html>