<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET['v1']?? 0;
        $valor2 = $_GET['v2']?? 0;
    ?>
<main>
    <h1>Anatomia de uma Divisão</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Dividendo</label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">
        <label for="v2">Divisor</label>
        <input type="number" name="v2" id="v2" value="<?=$valor2?>">
        <input type="submit" value="Analisar">
        
    </form>
</main>

<section id="estrutura">
    <h2>Estrututa da Divisão</h2>
    <?php 
        $divisao = intdiv($valor1, $valor2);
        print "<p>A Divisão entre os valores $valor1 e $valor2 é <strong>$divisao</strong></p>"; 
    ?>
</section>

    
</body>
</html>