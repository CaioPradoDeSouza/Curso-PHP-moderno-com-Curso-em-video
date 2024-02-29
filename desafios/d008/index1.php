<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1']?? '';

        $peso1 = $_GET['peso1']?? '';

        $valor2= $_GET['valor2']?? '';

        $peso2 = $_GET['peso2']?? '';

    ?>
    <main>

        <h1>Calculando Médias</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="GET">
            <label for="valor1">1° valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>" step="0.01">

            <label for="peso1">1° peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>" step="0.01">


            <label for="valor2">2° valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>" step="0.01">

            <label for="peso2">2° peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>" step="0.01">


            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section id="resultado">
        <h2>Cálculo das Médias</h2>
            
        <?php 

            //média aritmética

            $somaMedias = ($valor1 + $valor2) / 2;

            //média aritmética ponderada

            $valoresSomados = ($valor1 * $peso1) +($valor2 * $peso2);

            $valorFinal = $valoresSomados / ($peso1 + $peso2);

            echo" <p>Analisando os valores $valor1 e $valor2:</p>";

            echo"<ul>
            
                    <li>A <strong> Média Aritmética Simples </strong> entre os valores é igual a $somaMedias</li>

                    <li>A <strong> Média Aritmética Ponderada </strong> com pesos $peso1 e $peso2 é ".number_format($valorFinal,2,",",".")."</li>
            
                </ul>";

        ?>
    </section>
</body>
</html>