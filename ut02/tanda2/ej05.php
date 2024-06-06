<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Solución del ejercicio 5 </title>
</head>

<body>
    <!-- Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0). -->

    <form action="" method="GET">
        <label for="a">a</label>
        <input type="number" name="a" id="a">
        <br><br>
        <label for="b">b</label>
        <input type="number" name="b" id="b">
        <br><br>
        <input type="submit">
    </form>

    <?php
        $a = $_GET['a'] ?? 1;
        $b = $_GET['b'] ?? 1;
        echo "<p>$a x + $b = 0 => $a x = " . -$b . " => x = -$b/$a => x = " . -$b/$a . "</p>";
    ?>
</body>

</html>