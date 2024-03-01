<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
       
       $anoNasc = $_GET['anoNasc']?? '';

       $anoAtual = date("Y");

       $anoEscolhido = $_GET['anoEscolhido']?? $anoAtual;

    ?>
    <main>

        <h1>Calculando a sua Idade</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="GET">
            <label for="anoNasc"> Em que ano você nasceu? </label>
            <input type="number" name="anoNasc" id="anoNasc" min="1900" max="<?=$anoAtual - 1?>" value="<?=$anoNasc?>" step="0.01" required>


            <label for="anoEscolhido"> Quer saber a sua idade em que ano? ( atualmente estamos no ano <strong><?=$anoAtual?></strong> )</label>
            <input type="number" name="anoEscolhido" id="anoEscolhido" value="<?=$anoEscolhido?>" step="0.01">


            <input type="submit" value=" Qual será a minha idade ?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultados</h2>
            
        <?php 

         $idadeAtual = $anoEscolhido - $anoNasc;

         echo"Quem nasceu em $anoNasc vai ter $idadeAtual anos em $anoEscolhido;
         ";

        ?>
    </section>
</body>
</html>