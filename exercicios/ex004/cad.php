<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilo2.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <br>

    <main>
        <?php 
        
            $nome = $_REQUEST["nome"];
            $snome = $_REQUEST["snome"];

            echo"<p>É um prazer te conhecer, <strong>$nome $snome</strong> ! Este é o meu site. </p>";

        ?>
        <a href="javascript:history.go(-1)"><p>Voltar</p></a>
    </main>
</body>
</html>