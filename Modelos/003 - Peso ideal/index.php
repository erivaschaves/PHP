<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso ideal</title>
</head>
<body>
<?php
    // Capturando os dados do Formulário Retroalimentado
    $alt = $_GET["alt"] ?? "0"; // caso não haja numero.
    
?>
<main>
    <!--Título-->
    <h1>Cálculo de Peso Ideal</h1>
    <!--Criando labels ,inputs e botões-->
<form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="alt">Altura:</label>
        <input type="number" name="alt" id="alt" value="<?=$alt?>" required>
        <fieldset>
            <!--Deixando a opção masculino default-->
            <legend>Sexo</legend>
            <input type="radio" name="sexo" id="mas" checked>
            <label for="mas">Masculino</label><br>
            <input type="radio" name="sexo" id="fem" >
            <label for="fem">Feminino</label>
        </fieldset>
        <p>
            <input type="submit" value="Calcular" id="calcular">
        </p>
       
    </form>
</main>
<!--Exibindo peso ideal-->
<section>
    <h2>Resultado</h2>
    <?php    
    // Validando a opção marcada e exbindo com 2 casas decimais com toFixed
            if( window.document.getElementById('mas').checked) {
                res.innerHTML = `Seu peso ideal é: ${((72.7 * alt) - 58).toFixed(2)} KG meu jovem.`;
            }else{
                res.innerHTML = `Seu peso ideal é: ${((62.1 * alt) - 44.7).toFixed(2)} KG minha jovem.`; 
            }
    ?>
</section>
    
</body>
</html>