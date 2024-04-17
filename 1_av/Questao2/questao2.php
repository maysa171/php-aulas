<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão2</title>
</head>
<body>
    <div>
       <?php 
       $nome = $_GET["nome"];
       $sal = $_GET["salário"];
       $v = $sal;
       $data = $_GET["data"];
       echo "O (a) funcionário(a) $nome tem um salário de $sal em $data";
       
       
       
       
       ?>
       <br/>
        <a href="questao2.html"><button>Voltar</button></a>


        </form>
    </div>
    
</body>
</html>