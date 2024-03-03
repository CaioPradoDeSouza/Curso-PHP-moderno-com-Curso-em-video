<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Desafio PHP</title>
</head>
        <?php 

            $numDigitado = $_REQUEST['numDigitado'];


        ?>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    
            <label for="numDigitado">Qual é o total de segundos?</label>

            <input type="number" name="numDigitado" id="numDigitado">

            <input type="submit" name="" id="" value="Calcular">

           
    
        </form>
    </main>
    <main>
        <h2>Totalizando tudo</h2>
        <p>

            Analisando o valor que você digitou, <strong> <?=number_format($numDigitado, 0 ,",",".")?> de segundos</strong> <br>equivalem a um total de :
            
            
        </p>

        <?php 

            $sobra = $numDigitado;

            $semana = (int)($sobra / 604_800);

            $sobra = $sobra % 604_800;

            $dia = (int)($sobra / 86_400);

            $sobra = $sobra % 86_400;

            $hora = (int)($sobra / 3_600);

            $sobra = $sobra % 3_600;

            $minuto = (int)($sobra / 60);

            $sobra = $sobra % 60;

            $segundo = $sobra;
        ?>
        <ul>
                <li> <?=$semana?> semanas </li>
                <li> <?=$dia?> dias </li>
                <li><?=$hora?> horas</li>
                <li> <?=$minuto?> minutos </li>

                <li><?=$segundo?>segundos
                </li>
            </ul>

    </main>
</body>
</html>