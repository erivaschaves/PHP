<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <!--Carregando arquivo de estilo css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //Pegando valores dos inputs
        $valor1 = $_GET['v1']?? '';
        $peso1 = $_GET['p1']?? '';
        $valor2 = $_GET['v2']?? '';
        $peso2 = $_GET['p2']?? '';
        $mediaA = ($valor1 + $valor2) / 2;
        $mediaP = (($valor1*$peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <!--Criando formulário e inputs-->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" min = "1" value="<?=$valor1?>" required>
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1"  min = "1" value="<?=$peso1?>" required>
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2"  min = "1" value="<?=$valor2?>" required>
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2"  min = "1" value="<?=$peso2?>" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <!--Criando lista de médias-->
        <h2>Cálculo da Médias </h2>
        <?php
            // Imprimindo resultado com 2 casa decimais com number_format
            echo "Analisando os valores $valor1 e $valor2:";
            print "
            <ul>
               <li><strong>A Média Aritmética Simples</strong> entre os valores é igual a ".number_format($mediaA, 2, ",", ".").".</li>
               <li><strong>A Média Aritmética Ponderada</strong> com os pesos $peso1 e $peso2 é igual a ".number_format($mediaP, 2, ",", ".").".</li> 
            </ul>";
        ?> 
    </section>
    
</body>
</html>