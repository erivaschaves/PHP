<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe seu Salário</title>
    <!--Carregando estilo em css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Definindo salário, quantidade de salários e diferença entre eles 
    $salario = 1380;
    $valor = $_GET['val'] ?? 0;
    $qtd = intdiv($valor, $salario);
    $dif = $valor - ($qtd * $salario); 
    ?>
    <main>
    <!--Criando formulário PHP_SELF tipo get-->
    <h1>Informe seu Salário</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <!--input que recebe o valor-->
            <label for="val">Salário(R$)</label>
            <input type="number" name="val" id="val" value="<?=$valor?>">
            <?php
                echo "Considerando o salário mínimo de <strong>R\$".number_format($salario, 2, "," , ".")."</strong>" 
            ?>
            <!--input tipo submit Calcular-->
            <input type="submit" value="Calcular">
       </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            //Imprimindo o resultado na tela
            print "<p>Quem recebe uma salário de R\$".number_format($valor, 2, "," , ".")." ganha <strong>$qtd salários mínimos</strong> + R\$".number_format($dif, 2, "," , ".")."</p>"; 
        ?>        
    </section>
    
</body>
</html>