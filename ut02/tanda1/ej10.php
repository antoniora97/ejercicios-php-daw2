<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 10 </title>
    </head>

    <body>
        <!-- Realiza un conversor de Mb a Kb. -->

        <form action="" method="GET" name="form">
            <label for="mb">Mb</label>
            <input type="number" name="mb" id="mb">
            <input type="submit">
        </form>

        <?php
            $mb = $_GET['mb'] ?? 0;
            echo "<p>$mb Mb = " . $mb*1000 . "Kb.</p>";
        ?>
    </body>

</html>