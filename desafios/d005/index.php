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

        $dividendo = $_GET['dividendo']?? 0;

        $divisor = $_GET['divisor']?? 1;
    
    
    ?>
    <main>

        <h1>Anatomia de uma divisão</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $divisão = $dividendo / $divisor;
            $int = (int)$divisão; 
            $res = $divisão - $int;

            print "
            <table>
            <tr>
                <td>Dividendo</td>
                <td>Divisor</td>
            </tr>
            <tr>
                <td>$dividendo</td>
                <td>$divisor</td>
            </tr>
            <tr>
                <td>Resto</td>
                <td>Resultado da divisão</td>
            </tr>
            <tr>
                <td>$res</td>
                <td>$int</td>
            </tr>
            
            </table> 

            <p>O resultado de <strong>$dividendo</strong> dividido por <strong>$divisor</strong> é <strong>$int</strong> <br>Eo resto da divisão é <strong>$res</strong></p>"
        ?>
    </section>
</body>
</html>