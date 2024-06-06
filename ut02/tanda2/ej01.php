<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 1 </title>
    </head>

    <body>
        <!-- Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a primera hora ese día. -->

        <form action="" method="GET" name="form">
            <label for="numb">Introduce un número</label>
            <input type="number" name="numb" id="numb">
            <input type="submit">
        </form>

        <?php
            $numb = $_GET['numb'] ?? 1;
            $asignaturas = array(1 => "subject1", 2 => "subject2", 3 => "subject3", 4 => "subject4", 5 => "subject5");
            $dias = array(1 => "lunes", 2 => "martes", 3 => "miércoles", 4 => "jueves", 5 => "viernes");
            // comprobamos que el número enviado está en rango [1, 5]
            if ($numb >= 1 && $numb <= 5) {
                echo "<p>El $dias[$numb] toca $asignaturas[$numb].</p>"; 
            } else {
                echo "<p>El número ($numb) introducido no se corresponde con un día de clase.</p>";
            }
        ?>
    </body>

</html>