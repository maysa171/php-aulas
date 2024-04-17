<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores do usuário</title>
    <style>
        h2{
            color: blue;
            font: 12pt arial;
        }
    </style>
</head>
<body>
    
    <?php 
    $v1 = $_GET["a"];
    $v2 = $_GET["b"];

    echo "<h2> os valores recebidos são $v1 e $v2  </h2>";
    
    $soma = $v1 + $v2;
    $sub = $v1 - $v2;
    $mult = $v1 * $v2;
    $div = $v1 / $v2;

    echo "o resultado da soma é $soma.";
    echo "<br> o resultado da subtração é $sub.";
    echo "<br> o resultado da multiplicação é $mult.";
    echo "<br> o resultado da divisão é $div.";
//funcoes basicas em php
//funcao abs = valor absoluto 
        echo "<br>valor absoluto de $v1 é: ". abs($v1);
        //pow = potenciaçao
        echo "<br>valor de $v1<sup>$v2</sup> é: ".pow($v1, $v2);
        //raiz quadrada
        echo "<br>a raiz quadrada de $v1 é ".sqrt($v1);

        //round() =arredondamento
        echo "<br> o valor arrendondado de $v1 é: ".round($v1);
        echo "<br> o valor arrendondado de $v1 é: ".ceil($v1);
        //arredonda para cima
        echo "<br> o valor arrendondado de $v1 é: ".floor($v1);
        //arredonda para baixo
        //number_format = formatação moedas.
        echo " valor de $v1 em moeda é R$".number_format($v1,2,",");
    ?>

</body>
</html>