<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Solución del ejercicio 9 </title>
    </head>

    <body>
        <!-- Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax2 + bx + c = 0). -->

        <form action="" method="GET">
            <label>a</label>
            <input type="number" name="a">
            <br><br>
            <label>b</label>
            <input type="number" name="b">
            <br><br>
            <label>c</label>
            <input type="number" name="c">
            <br><br>
            <input type="submit">
        </form>

        <?php
            $a = $_GET['a']; 
            $b = $_GET['b']; 
            $c = $_GET['c']; 
            
            $menosb = $b * -1; 
            $oper1 = pow($b,2);
            $oper2 = 4*$a*$c; 
            $resta = $oper1-$oper2;
            $raiz = sqrt($resta);
            $dosa = 2*$a;
            
            $result1 = ($menosb + $raiz)/$dosa; 
            $result2 = ($menosb - $raiz)/$dosa; 
            
            echo"<p>x<sub>1</sub> = $result1</p>"; 
            echo"<p>x<sub>2</sub> = $result2</p>"; 
        ?>
    </body>

</html>