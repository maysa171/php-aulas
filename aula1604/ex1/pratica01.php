<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multa de Trânsito</title>
</head>
<body>
<div>
        <?php 
        $vel_car = $_GET["velocidade"];
        $vel_max = 80;
        $vl_ultra = $vel_car - $vel_max;
        $vl_multa = $vl_ultra * 5;
        if ($vel_car > 80) {
            echo "Você foi multado!<br/>";
            echo "Sua velocidade foi de $vel_car km/h.<br/>";
            echo "você ultrapassou $vl_ultra km/h.<br/>";
            echo "O valor da sua multa é:R$".number_format($vl_multa,2,",",".");
        }
        else {
            echo "<h2> Boa viagem! Siga em frente!</h2>";
        }

        ?>

        <br>
        <a href="pratica01.html"> <button type="button">Voltar</button></a>
</div>
</body>
</html>