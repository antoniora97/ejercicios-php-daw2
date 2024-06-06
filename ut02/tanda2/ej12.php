<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 12 </title>
    </head>

    <body>
        <!-- Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan de conocimientos en las diferentes asignaturas del curso. -->

        <form action="">
            <p>¿De qué color es el caballo blanco de Santiago?</p>
            <input type="radio" name="q1" value="1" id="blanco">
            <label for="blanco">Blanco</label>
            <input type="radio" name="q1" value="0" id="negro">
            <label for="negro">Negro</label>
            <input type="radio" name="q1" value="0" id="azul">
            <label for="azul">Azul</label>

            <p>¿Cuál no es una estructura de control en programación?</p>
            <input type="radio" name="q2" value="0" id="condicional">
            <label for="condicional">Condicional</label>
            <input type="radio" name="q2" value="1" id="recuperativa">
            <label for="recuperativa">Recuperativa</label>
            <input type="radio" name="q2" value="0" id="iterativa">
            <label for="iterativa">Iterativa</label>

            <p>¿Qué atributo sirve para definir estilos en línea?</p>
            <input type="radio" name="q3" value="0" id="css">
            <label for="css">CSS</label>
            <input type="radio" name="q3" value="0" id="font">
            <label for="font">Font</label>
            <input type="radio" name="q3" value="1" id="style">
            <label for="style">Style</label>

            <br><br>

            <input type="submit">
        </form>

        <?php
        $q1 = $_GET['q1'] ?? 0;
        $q2 = $_GET['q2'] ?? 0;
        $q3 = $_GET['q3'] ?? 0;
        echo "<p>Has conseguido " . $q1 + $q2 + $q3 . " puntos.</p>";
        ?>
    </body>

</html>