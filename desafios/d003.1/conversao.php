<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversão</title>
</head>
<body>
    <main>
        <h1>Valor convertido</h1>
        <?php 
            $cotação = 4.97;

            $real = $_REQUEST["din"];

            $dolar = $real / $cotação;

             $padrão = numfmt_create("pt-BR",NumberFormatter::CURRENCY);

             echo"Você tem ". numfmt_format_currency($padrão, $real, "BRL") ." reais o valor em dolares é aproximadamente " .numfmt_format_currency($padrão, $dolar, "USD")." dólares";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>