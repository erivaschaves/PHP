<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <!--Carregando arquivo de estilo css --->
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <?php
    //Pegando valores dos inputs e calculando porcentagem de aumento
        $valor = $_GET['v1'] ?? '0';
        $aumento = $_GET['num'] ?? '0';
        $reajuste = $valor * (1 + ($aumento/100));
    ?>
    <!--Criando formulário SERVER PHP_SELF e inputs-->
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Preço do produto(R$)</label>
            <input type="number" name="v1" id="v1" min ="0.10" step="0.01" value="<?=$valor?>">
            <label for="num">Qual será o percentual de reajuste?(<strong><output id="ival">0</output>%</strong>)</label>
            <input type="range" name="num" id="num" min = "0" max = "100" value="0" oninput="ival.innerHTML = Number(num.value)" step="1" value = "<?=$reajuste?>">
            <input type="submit" value="Reajustar">
        </form>       
    </main>
    <section>
        <!--Imprimindo Resultado--> 
        <h2>Resultado do Reajuste</h2>
        <p>O pruduto que custava R$<?=number_format($valor, 2, ",", ".")?>, com <strong> <?=$aumento?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($reajuste, 2, "," , ".")?></strong> a partir de agora.</p>
    </section>  
</body>
</html>