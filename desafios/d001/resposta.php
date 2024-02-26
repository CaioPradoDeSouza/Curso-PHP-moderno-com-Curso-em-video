<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <p>
            <?php
                $n = $_REQUEST["num"];
                $a = $n - 1;
                $s = $n + 1;

                echo "O numero escolhido foi $n";

                echo "<br> O seu antecessor é $a";

                echo "<br> O seu sucessor é $s";

            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
    </main>
</body>
</html>