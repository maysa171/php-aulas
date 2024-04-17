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
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "<h2>A raiz quadrada de $valor é $rq.<h2/>";
    
    
    ?>
    <br/>
    <a href="index.html">voltar</a>

</div>
    
</body>
</html>