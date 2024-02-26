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

            $inicio = date("m-d-y",strtotime("-7 days"));

            $fim = date("m-d-y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url),true);
            

            $cotação = $dados["value"][0]["cotacaoCompra"];

            $real = $_REQUEST["din"] ?? 0;

            $dolar = $real/$cotação;

            echo "Você tem ". $real ." reais o valor em dolares é aproximadamente " .number_format($dolar,2,",",".")." dólares";
           
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>