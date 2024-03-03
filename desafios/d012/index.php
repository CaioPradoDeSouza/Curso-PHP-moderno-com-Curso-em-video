<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Desafio PHP</title>
</head>
        <?php 

            $valorInserido = $_REQUEST['valor'];


        ?>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    
            <label for="numDigitado">Qual valor você deseja sacar?</label>

            <input type="number" name="valor" id="valor" value="<?=$valorInserido?>">

            <p>
                * Notas disponiveis R$ 100, 50, 10, 5
            </p>

            <input type="submit" name="" id="" value="Sacar">

           
    
        </form>
    </main>
    <main>
       

        <?php 

            $saque = $valorInserido;

            $sobra =$saque;

            $notasCem = (int)($sobra / 100);

            $sobra = $sobra % 100;

            $notasCinquenta = (int)($sobra / 50);

            $sobra = $sobra % 50;

            $notasDez = (int)($sobra / 10);

            $sobra = $sobra % 10;

            $notasCinco = (int)($sobra / 5);

            $sobra = $sobra % 5;

           
        ?>
         <h2>Saque de <strong>R$ <?=number_format($saque, 0, ".",",")?></strong> realizado.</h2>
        <p>

            O caixa eletrônico vai te entregar as seguintes notas :
            
            
        </p>
        <ul>
                <li>

                    <p>
                    <img src="./img/100-reais.jpg" alt="" width="120px"> X
                    <?=$notasCem?></p>

                </li>

                <li>
                    
                    <p><img src="./img/50-reais.jpg" alt="" width="120px">
                     X 
                    <?= $notasCinquenta?>           
                    </p>
                
                </li>

                <li>

                    <p>
                    <img src="./img/10-reais.jpg" alt="" width="120px"> X
                    <?=$notasDez?></p>

                </li>

                <li>

                    <p>
                    <img src="./img/5-reais.jpg" alt="" width="120px"> X
                    <?=$notasCinco?> </p>

                </li>
        </ul>

    </main>
</body>
</html>