<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <style>
      h2{
        color:green;
      }
    </style>
    
</head>
<body>
   
    <?php 
     echo "<h2>Olá, Mundo! Estou no IBC - Cetam <br> Rayssa</h2>"
    
    ?>
    
    <?php 
    
    echo "qual seu nome? </h2>";
    
    $nome = $_GET["a"];

    echo "<br>ola $nome, é um prazer te conhecer";
    
    ?>

</body>
</html>