<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 8 </title>
    </head>

    <body>
        <!-- Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas. Se pagarán 12 euros por hora. Recogida de datos por teclado mediante formularios -->

        <form method="GET">
            <label for="horas">Horas trabajadas</label>
            <input type="number" name="horas" id="horas">
            <input type="submit">
        </form>

        <?php
            $horas_trabajadas = $_GET['horas'] ?? null;
            $precio_hora = 12.00;
            echo "<p>Tu salario es de " . ($horas_trabajadas * $precio_hora) . "€ semanales.</p>";
        ?>

    </body>

</html>