<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <!--Carregando arquivo de estilo css -->
    <link rel="stylesheet" href="style.css">
    <!--Criando style local para ajustar espaçamento e tamanho das imagens-->
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <!--Contando as notas com if após pegar o valor do input-->
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
    <!--Criando formulário SERVER PHP_SELF e inputs-->
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Qual Valor você deseja sacar?(R$)*</label>
            <input type="number" name="num" id="num" min="0" value="<?=$valor?>" step="5" required>
            <p style="font-size: 0.7em">*Notas disponiveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <!--Imprimindo Resultado das notas-->
        <h2>Saque de R$<?=number_format($valor, 2 , "," , ".")?> realizado</h2> 
        <p>O caixa eletrônico vai entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="nota de 100" class="nota" > x<?=$cem?></li>
            <li><img src="imagens/50-reais.jpg" alt="nota de 50" class="nota" > x<?=$cinq?></li>
            <li><img src="imagens/10-reais.jpg" alt="nota de 10" class="nota" > x<?=$dez?></li>
            <li><img src="imagens/5-reais.jpg" alt="nota de 5" class="nota"> x<?=$cinco?></li>
        </ul>            
    </section>

<!-- Contando as notas através da variáveis
$saque = 385;
//Saque de R$100
$resto = $saque;
$tot100 = (int)($resto / 100);
$resto  %= 100;
//Saque de R$50
$tot50 = (int)($resto / 50);
$resto  %= 50;
//Saque de R$10
$tot10 = (int)($resto / 10);
$resto  %= 10;
//Saque de R$5
$tot5 = (int)($resto / 5);
$resto  %= 5;-->
</body>
</html>