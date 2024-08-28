<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <!--Carregando arquivo de estilo css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor = $_GET['num']?? '0';
        $cem = 0;
        $cinq = 0; 
        $dez = 0; 
        $cinco = 0;
        $contador = $valor;
        while ($contador >= 5){
            if ($contador >= 100){
                $contador = $contador - 100;
                $cem++;
            }else if ($contador>=50) {
                    $contador = $contador - 50;
                    $cinq++;
            } else if ($contador>=10){
                $contador = $contador - 10;
                $dez++;
            }else if ($contador>= 5){
                $contador = $contador - 5;
                $cinco++;
            }        
        }
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Qual Valor você deseja sacar?(R$)*</label>
            <input type="number" name="num" id="num" min="0" value="<?=$valor?>">
            <p>*Notas disponiveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de R$<?=number_format($valor, 2 , "," , ".")?> realizado</h2> 
        <p>O caixa eletrônico vai entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="nota de 100"> x<?=$cem?></li><br>
            <li><img src="imagens/50-reais.jpg" alt="nota de 50"> x<?=$cinq?></li><br>
            <li><img src="imagens/10-reais.jpg" alt="nota de 10"> x<?=$dez?></li><br>
            <li><img src="imagens/5-reais.jpg" alt="nota de 5"> x<?=$cinco?></li>
        </ul>            
    </section> 
</body>
</html>