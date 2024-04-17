<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php 
        $num = $_GET["n"];

      
        echo "O antecessor de $num é:".--$num;
        echo " O sucessor de $num é:".++$num;

        
       
    
    
    
    ?>
    <br/>
    <a href="index.html">voltar</a>

</div>
    
</body>
</html>