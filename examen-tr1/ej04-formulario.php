<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen de PHP: parte 4</title>
</head>

<body>
    <h1>MUESTRA CARTAS (FORMULARIO)</h1>
    <form action="ej04-resultado.php" method="POST">
        <p>Elija un número de cartas y un palo.</p>
        <label for="numero"><strong>Número de cartas:</strong></label>
        <input type="number" name="numero" required autofocus>
        <select name="palos" id="palos">
            <option value="c">Corazones</option>
            <option value="d">Diamantes</option>
            <option value="p">Picas</option>
            <option value="t">Tréboles</option>
        </select>
        <br/><br/>
        <button type="submit">Contar</button>
        <button type="reset">Borrar</button>
    </form>
</body>

</html>