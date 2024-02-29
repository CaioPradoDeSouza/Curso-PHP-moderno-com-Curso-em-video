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
        $num = $_GET['num']?? 0;

    ?>
    <main>

        <h1>Calculando Raízes</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="GET">
            <label for="sal">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>" step="0.01">


            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
            
        <?php 

            $Rquadrada = sqrt($num);

            $Rcubica = pow($num,1.0/3.0);

            echo"<p>Analisando o <strong>número $num</strong>,temos:</p>";

            echo"<ul>
            
                <li>A raiz quadrada é ". number_format($Rquadrada, 3, ",",".")." </li>
                <li>A raiz cúbica é ".number_format($Rcubica, 3,",",".")."</li>
            </ul>";

        ?>
    </section>
</body>
</html>