<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Desafio 3 PHP</title>
</head>
<body>
    
        <main>
            <?php

                // Formatação bem simples de moeda

                $num = $_REQUEST["num"];
                $div = 4.95;
                $res = $num/$div;
                echo"Você tem ". $num ." reais o valor em dolares é aproximadamente " .number_format($res,2,",",".")." dólares";

                // Formatação profissional de moeda

                // Bibliotéca intl (internalization PHP)

                //$padrao = numfmt_create("pt-BR",NumberFormatter::CURRENCY);

                //echo"Você tem ". numfmt_format_currency($padrao, $num, "BRL") ." reais o valor em dolares é aproximadamente " .numfmt_currency($padrao, $res, "USD")." dólares";
            
            ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
        </main>

</body>
</html>