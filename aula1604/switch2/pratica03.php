<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>
<body>
<div>
        <?php 
        $dia = $_GET["dias"];
        switch ($dia) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            
                $r = "<h2>Hoje tem aula &#x1F4DA</h2>";
                break;
            
            case 6:
            case 7:
                $r = "<h2>Não tem aula\u{1f917}</h2>";
                
        }
        echo "$r";
        
       

        ?>

        <br>
        <a href="pratica03.html"> <button type="button">&#X2b05Voltar</button></a>
</div>
</body>
</html>