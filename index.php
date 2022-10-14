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
    <div class="container">
        <main>
            <header>
                <h1 class="titulo">COMPARADOR DE NÚMEROS</h1>
                <cite>Hecho por Alvaro Angulo</cite>
            </header>
            <form  method="post">
                <section class="formulario">
                    <label for="numero1">
                    <input type="number" title="Numero 1" name="num1" id="numero1" placeholder="Numero 1">
                </label>
                    <label for="numero2">
                    <input type="number" title="Numero 2" name="num2" id="numero2" placeholder="Numero 2">
                </label>
                    <label for="numero3">
                    <input type="number" title="Numero 3" name="num3" id="numero3" placeholder="Numero 3">
                </label>
                <input type="submit" value="Enviar" class="w-200 mt-3 btn btn-primary">

                </section>
            </form>
            <div class="result">
                <!-- Aqui van los resultados de la comparacion -->
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
            </div>
            </section>
        </main>
    </div>



</body>

</html>