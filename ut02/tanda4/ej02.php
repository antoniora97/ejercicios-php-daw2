<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            th, td {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <!-- Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente. -->
        
        <?php
            if (!isset($_POST['numero'])) {
                $numero = 0;
                $numeros_str = "";
                $contador = 0;
            } else {
                $numero = $_POST['numero'];
                $numeros_str = $_POST['numeros_str'];
                $contador = $_POST['contador'];
            }

            if ($contador != 10) {
                if ($contador==1) $numeros_str = "";
                $contador += 1;
                $numeros_str = $numeros_str . " " . $numero; # se añade el número al string
                echo 
                    "
                    <form method='POST'>
                        <label for='numero'>Numero</label>
                        <input type='number' name='numero' id='numero' autofocus>
                        <input type='hidden' name='numeros_str' value='$numeros_str'>
                        <input type='hidden' name='contador' value='$contador'>
                        <input type='submit' value='Enviar'>
                    </form>
                    ";
            } else {
                $numeros_str = $numeros_str . " " . $numero; # se añade el último número al string
                $array = explode(" ", trim($numeros_str)); # se convierte el string en un array
                $maximo = $array[0];
                $minimo = $array[0];
                # se identifica el máximo y el mínimo
                for ($i=0; $i<count($array); $i+=1) {
                    if ($array[$i] > $maximo) $maximo = $array[$i];
                    if ($array[$i] < $minimo) $minimo = $array[$i];
                }
                # se muestra el array con el máximo y el mínimo
                echo "<div>";
                for ($i=0; $i<count($array); $i+=1) {
                    echo "<p>$array[$i]";
                    if ($array[$i] == $maximo) echo " | MAXIMO";
                    if ($array[$i] == $minimo) echo " | MINIMO";
                    echo "</p>";
                }
                echo "</div>";
            }
        ?>
        <br>
        <a href="ej02.php">Reiniciar</a>
        <br>
        <a href="./">Volver atrás</a>
    </body>

</html>