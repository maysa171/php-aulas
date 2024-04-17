<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variável de variáveis </title>
    <style>
        body{

            font: 20pt Arial;
        }
    </style>
</head>
<body>
    <?php 
    //$nome = "Cetam";
    //$$nome ="IBC";
    //echo $nome;
    //echo "<br/>".$Cetam;

    $a = "ola";
    $$a = "oi";
    echo $a;
    echo "<br/>".$ola;

    

    ?>
</body>
</html>