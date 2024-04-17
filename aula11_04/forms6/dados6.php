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
        $v = $_GET["n"];
        $ante = $v - 1;
        $suce = $v + 1;
        


      echo "O antecessor de $v é $ante e o sucessor de $v é $suce ";

        

        

    
    
    
    ?>
    <br/>
    <a href="index.html">voltar</a>

</div>
    
</body>
</html>