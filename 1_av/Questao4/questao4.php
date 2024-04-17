<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão4</title>
</head>
<body>
<div>
    <?php 

     $valor1 = $_GET["vp"];
     $v = $valor1 - ($valor1 * 5 / 100);
     echo "<h1>O valor do seu produto é: R$ $valor1 </h1>";
     echo "<h1>O valor do desconto de 5% é R$ 2.50</h1>";
     echo "<h1> O valor do desconto é R$ $v</h1>"

    
    
    
    ?>
    <br/>
    <a href="questao4.html">voltar</a>

</div>
    
</body>
</html>