<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Solución del ejercicio 4 </title>
</head>

<body>
    <!-- Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se pagan a 16 euros la hora. -->

    <form action="" method="GET">
        <label for="horas_trabajadas">Horas trabajadas</label>
        <input type="number" name="horas_trabajadas" id="horas_trabajadas">
        <input type="submit">
    </form>

    <?php
        $horas_trabajadas = $_GET['horas_trabajadas'] ?? 1;
        $precio_base = 12.00;
        $precio_hora_extra = 16.00;
        $salario_total = 0;
        if ($horas_trabajadas > 40) {
            $salario_total = 40*$precio_base + abs(40 - $horas_trabajadas)*$precio_hora_extra;
        } else {
            $salario_total = $horas_trabajadas*$precio_base;
        }
        echo "<p>El salario total del trabajador es $salario_total € semanales.</p>";
    ?>
</body>

</html>