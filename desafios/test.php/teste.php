<?php 
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'02-14-2024\'&@dataFinalCotacao=\'02-21-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url),true);
        

            $cotação = $dados["value"][0]["cotacaoCompra"];

            


            echo "A cotação foi $cotação" ;
?>