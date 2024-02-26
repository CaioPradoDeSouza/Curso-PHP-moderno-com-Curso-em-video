<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Document</title>
</head>
<body>
    <h1>Este foi o número gerado!</h1>
    
        <?php
            $num = mt_rand(0,1000000);
            echo"<p>O número gerado foi $num<p/>";
        ?>
    <button onclick="javascript:document.location.reload()">Gerar outro</button>
    <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
</body>
</html>