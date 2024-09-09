<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <!--Carregando arquivo css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET['v1']?? 0;
        $valor2 = $_GET['v2']?? 1;
    ?>
<main>
    <h1>Anatomia de uma Divisão</h1>
    <!--Criando formulário PHP_SELF-->
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Dividendo</label>
        <input type="number" name="v1" id="v1" min="0" value="<?=$valor1?>">
        <label for="v2">Divisor</label>
        <input type="number" name="v2" id="v2" min = 1 value="<?=$valor2?>">
        <input type="submit" value="Analisar">
        
    </form>
</main>

<section>
    <h2>Estrututa da Divisão</h2>
    <!--Criando divisão inteira com a função intdiv e resto da divisão-->
    <?php 
        $divisao = intdiv($valor1, $valor2);
        $resto = $valor1 % $valor2;
    ?>
    <!--criando tabela da divisão-->
    <table class="divisao">
            <tr>
                <td><?=$valor1?></td>
                <td><?=$valor2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$divisao?></td>
            </tr>    
    </table>
</section> 
</body>
</html>