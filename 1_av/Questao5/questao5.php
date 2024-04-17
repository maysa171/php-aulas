<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão5</title>
</head>
<body>
<div>
    <?php 

    $nome = $_GET["nome"];
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $nota =  date("Y");
    $m = ($nota1 + $nota2) / 2;
    echo " a média  entre $nota1 e $nota2 é igual a $m";
    if ($nota >= 7) {
        $v = " Aprovado.";
    }
    elseif ($nota < 5 || $nota <= 6.99 ) {
            $v = "Recuperação";
        }
    else {
            $v = "Reprovado";
        }
    
    echo " $nome Sua situação é $v ";
   


    
    
    
    ?>
    <br/>
    <a href="questao5.html">voltar</a>

</div>
    
</body>
</html>