<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compador de Números</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
</head>

<body>
<center
    
<h1  id="_1"> Resultados</h1>
    </br>
    </br>

    
<?php


$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];


class comparador
{
    function mayor($n1, $n2, $n3)
    {
        if ($n1 > $n2& $n1 > $n3) {
            echo ("El valor mayor es: " . $n1);

        }
        elseif ($n2 > $n1& $n2 > $n3) {
            echo ("El valor mayor es: " . $n2);

        }
        elseif ($n3 > $n1& $n3 > $n2) {
            echo ("El valor mayor es: " . $n3);

        }elseif($n1 == $n2 & $n1 == $n3 & $n2 == $n3) {
            echo ("los valores son iguales: " );

        }elseif($n1 == $n2){
            echo("Los valores mayores son iguales: $n1");

        }elseif($n2 == $n3){
            echo("Los valores mayores son iguales:  $n2");
        }elseif($n1 == $n3){
            echo("Los valores mayores son iguales: $n3");
        }
        
        
    }
}

$M = new comparador();
echo $M->mayor($num1, $num2, $num3);

?>
</center>
</body>

</html>