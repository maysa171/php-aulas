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
        $c = 1;
        while ($c <= 5) {
            $v = "num".$c; /*criadora das variaveis que iram receber os valores*/
            $user = "v". $c; /* variavel que ira receber os valores dos usuarios*/ 
            $$v = $_GET["$user"]; /*variavel das variaveis sendo gerada para receber os valores*/
            $c ++;
            
        }
        echo "$num1 $num2 $num3 $num4 $num5";
        ?>
        <br/>
        <a href="pratica04 copy2.php"><button>Voltar</button></a>


        
</div>
</body>
</html>