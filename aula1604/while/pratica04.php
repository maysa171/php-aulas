<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
<div>
        <?php 
        $c = 100;
        while ($c >= 0) {
            echo "$c ";
            $c -= 10; /*$c = $c + 1*/
        }
        
       

        ?>

        <br>
        <a href="pratica04.html"> <button type="button">&#X2b05Voltar</button></a>
</div>
</body>
</html>