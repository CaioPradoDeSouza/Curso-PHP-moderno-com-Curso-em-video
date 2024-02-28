<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        //capturando dados do Formulário retroalimentado

        $salario = $_GET['sal']?? 0;
        $Smin = 1_412.00;
    
    ?>
    <main>

        <h1>Informe seu Salário</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="GET">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">

            <p>Considerando o salário minimo de R$ <?=number_format($Smin, 2, ",", ".")?></p>

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
            
        <?php 


            $qtdDeSalarios = (int)($salario / $Smin);

            $dif = $salario % $Smin;

            echo"<p>Quem recebe um salário de R$ <strong>$salario</strong> ganha <strong> $qtdDeSalarios salários minimos</strong> + R$ $dif</p>";
        ?>
    </section>
</body>
</html>