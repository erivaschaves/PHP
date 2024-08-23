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
        $valor = $_GET['v1'] ?? 0;
        $aumento = $_GET['num'] ?? 0;
        $reajuste = $valor * (1 + ($aumento/100));
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Preço do produto(R$)</label>
            <input type="number" name="v1" id="v1">
            <label for="num">Qual será o percentual de reajuste?(<output id="ival">0</output>%)</label>
            <input type="range" name="num" id="num" min = "0" max = "100" value="0" oninput="ival.innerHTML = Number(num.value)">
            <input type="submit" value="Reajustar">
        </form>       
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
            echo "O pruduto que custava R\$".number_format($valor, 2, ",", ".").", com<strong> $aumento% de aumento</strong> vai passar a custar <strong>R\$".number_format($reajuste, 2, "," , ".")."</strong> a partir de agora."; 
        ?>
    </section>  
</body>
</html>