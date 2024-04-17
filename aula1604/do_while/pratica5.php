<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
</head>
<body>
<div>
    <?php 
    $cont = 100;
    do {
        echo " $cont";
        $cont +=100;
    } while ($cont <= 1000);

        
    ?>
</div>
</body>
</html>