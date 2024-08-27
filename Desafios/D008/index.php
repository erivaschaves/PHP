<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <!--Carregando estilo em css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Definindo valores e raizes-->
    <?php
        $num = $_GET['num'] ?? 1;
        $raizq = sqrt($num);
        $raizc =  $num ** (1/3);
    ?>
    <main>
        <h1>Informe o Número</h1>
        <!--Criando formulário e inputs-->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            echo "Analisando <strong>número $num</strong>, temos:"; 
        ?>
        <!--Criando lista de raizes-->
        <ul>
            <li>A sua raiz quadrada é <strong><?=number_format($raizq,3 ,",",".")?></strong></li>
            <li>A sua raiz cúbica é <strong><?=number_format($raizc,3 ,",",".")?></strong></li>
        </ul>
    </section>
    
</body>
</html>