<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso ideal</title>
    <!--Carregando estilo css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    // Capturando os dados do Formulário
    $alt = $_GET["alt"] ?? "1.80"; // caso não haja numero.
    $sexo = $_GET["sexo"] ?? "mas";
    
?>
<main>
    <!--Título-->
    <h1>Cálculo de Peso Ideal</h1>
    <!--Criando labels ,inputs e botões-->
<form action="index.php" method="get">
        <label for="alt">Altura:</label>
        <input type="number" name="alt" id="alt" placeholder="Altura" step="0.01" required>
        <fieldset>
            <!--Deixando a opção masculino default-->
            <legend>Sexo</legend>
            <input type="radio" name="sexo" id="mas" value="mas" checked>
            <label for="mas">Masculino</label><br>
            <input type="radio" name="sexo" id="fem" value="fem" >
            <label for="fem">Feminino</label>
        </fieldset>
        <p>
            <input type="submit" value="Calcular" id="calcular">
            <input type="reset" value="Limpar" id="limpar">
        </p> 
    </form>
</main>
<!--Exibindo peso ideal-->
<section>
    <h2>Resultado</h2>
    <?php    
    // Validando a opção marcada
            if($sexo == "mas") {
                $peso = (72.7 * $alt) - 58;
                //Exibindo resultado com uma casa decimal com number_format
                echo "Seu peso ideal é: ".number_format($peso,1 ,".",",")." KG meu jovem.";
            }else{
                $peso = (62.1 * $alt) - 44.7;
                echo "Seu peso ideal é: ".number_format($peso,1 ,".",",")." KG minha jovem."; 
            }
    ?>
</section>

    
</body>
</html>