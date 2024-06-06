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
        <!-- Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de los tres arrays dispuesto en tres columnas. -->
        
        <table border="2">
            <tr>
                <th>Numero</th>
                <th>Cuadrado</th>
                <th>Cubo</th>
            </tr>
        <?php
            for ($i = 0; $i < 20; $i += 1) {
                $numero[] = rand(0, 100);
                $cuadrado[] = pow($numero[$i], 2);
                $cubo[] = pow($numero[$i], 3);
                echo 
                    "
                        <tr>
                            <td>$numero[$i]</td>
                            <td>$cuadrado[$i]</td>
                            <td>$cubo[$i]</td>
                        </tr>
                    ";
            }
        ?>
        </table>
        <br>
        <a href="ej01.php">Reiniciar</a>
        <br>
        <a href="./">Volver atrás</a>
    </body>

</html>