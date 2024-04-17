<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de escolha - Switch</title>
</head>
<body>
<div>
        <?php 
        $n = $_GET["num"];
        $o = $_GET["oper"];
        switch ($o) {
            case 1:
                $o = $n *2;
                break;
            
            case 2:
                pow($n, 3);

                break;

            case 3:
                $o = sqrt($n);

        
            }
                echo "O resultado da solicitação é $o";
       

        ?>

        <br>
        <a href="pratica02.html"> <button type="button">Voltar</button></a>
</div>
</body>
</html>