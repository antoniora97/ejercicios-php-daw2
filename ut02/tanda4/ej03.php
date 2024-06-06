<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <!-- Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente, muestra el contenido del array. -->

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

            if ($contador != 15) {
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
                $numeros_str = $numeros_str . " " . $numero;
                $numeros_arr = explode(" ", trim($numeros_str));
                
            }
        ?>
    </body>

</html>