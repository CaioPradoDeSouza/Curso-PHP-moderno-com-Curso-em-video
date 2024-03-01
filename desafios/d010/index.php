<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Desafio PHP</title>
</head>
    <?php
        
        $preco = $_GET['preco']?? '0';

        $porcentagemReajuste = $_GET['reajuste']?? 0;


    ?>
   
<body>
 
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">

        <label for="preco">Preço do produto (R$)</label>
        <input type="number" name="preco" id="preco" min="0.10" step="0.01" required value="<?=$preco?>">

        <label for="reajuste">Qual será o percentual do reajuste? (<strong><span id="p"></span>%</strong>)</label>

        <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" value="<?= $porcentagemReajuste?>" oninput="mudaValor()">


        <input type="submit" value="Reajustar">
    
        </form>
    </main>

    
    <section>
        <h1>Resultado do Reajuste</h1>
        <?php

           $percentual = $porcentagemReajuste / 100.0;

           $valorFinal = $preco + ($percentual * $preco);

        ?>

        <p> O produto que custava <?=$preco?>, com reajuste de <strong><?=$porcentagemReajuste?>% de aumento </strong>  vai passar a custar <strong>R$<?=$valorFinal?></strong> .</p>
    </section>

    <script>

        mudaValor();
       
        function mudaValor(){

            let porcentagem = document.getElementById('p');

            porcentagem.innerText = reajuste.value;
        };
    </script>
</body>
</html>