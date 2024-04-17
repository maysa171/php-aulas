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
            echo "<form action='pratica04 copy3.php' method='get'>
        Valor $c: <input type='number' name='v$c'id='v1' min='0' max='100' value='0' > <br/>";

        $c++;
        }
        
       

        ?>

    <br/>
            <button type="submit">Enviar</button>
</div>
</body>
</html>