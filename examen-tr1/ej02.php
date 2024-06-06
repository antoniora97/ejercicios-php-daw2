<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen de PHP: parte 2</title>
</head>

<body>
    <?php
        if (!isset($_POST['numero'])) {
            $numero = 0;
            $secreto = rand(0, 100);
        } else {
            $numero = $_POST['numero'];
            $secreto = $_POST['secreto'];
        }

        if ($numero != $secreto) {
            echo 
            "
                <form method='POST'>
                    <p>Acierta el número secreto.</p>
                    <label for='numero'>Número</label>
                    <input type='number' name='numero' id='numero' placeholder='0' min='0' max='100' autofocus>
                    <input type='hidden' name='secreto' value='$secreto'>
                    <button type='submit'>Comprobar resultado</button>
                </form>
            ";

            if ($numero == null) {
                echo "<p>No has introducido ningún número.</p>";
            } else if ($numero > $secreto) {
                echo "<p>El número secreto es más pequeño.</p>";
            } else {
                echo "<p>El número secreto es más grande.</p>";
            }
            
        } else {
            echo "<h1> HAS ACERTADO EL NUMERO.</h1>";

            echo "<a href='ej02.php'>Reiniciar juego.</a>";
        }            
    
    ?>
</body>

</html>