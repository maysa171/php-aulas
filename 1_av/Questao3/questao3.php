<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão3</title>
</head>
<body>
<div>
    <?php 
     
    $valor1 = $_GET["v1"];
    $valor2 = $_GET["v2"];
    $s = $valor1 + $valor2 ;
    echo "a soma entre $valor1 e $valor2 é igual a: $s";

    
    
    
    ?>
    <br/>
    <a href="questao3.html">voltar</a>

</div>
    
</body>
</html>