<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ano atual e ano anterior</title>
</head>
<body>
    <?php 
    $atual = 2024;
    //$atual = $atual - 1
    //echo "o ano atual é $atual e o ano anterior é ".--$atual;
    echo "o ano atual é $atual e o próximo ano será ".++$atual;
    
    ?>
    
</body>
</html>