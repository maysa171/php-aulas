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
        $sal = $_GET["n"];
        $v = $sal + ($sal * 15 / 100);


      echo "Novo salário é : ".number_format($v,2, ",",".",);

        

        

    
    
    
    ?>
    <br/>
    <a href="index.html">voltar</a>

</div>
    
</body>
</html>