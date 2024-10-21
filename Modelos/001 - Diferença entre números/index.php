<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença entre Valores</title>
    <!--Carregando estilo css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    // Capturando os dados do Formulário
    $n1 = $_GET["n1"] ?? "0"; // caso não haja numero.
    $n2 = $_GET["n2"] ?? "0"; // caso não haja numero.
?>
    <main>
        <!--Título-->
            <h1>Diferença entre valores</h1>
            <!--Criando formulário-->
            <form action="index.php" method="get">
                    <input type="number" name="n1" id="n1" placeholder="Valor 1" required>
                    <input type="number" name="n2" id="n2" placeholder="Valor 2" required>
                    <p>
                        <input type="submit" value="Subtrair" id="subtrair">
                        <input type="reset" id="limpar" value="Limpar">
                    </p>
            </form>
    <!--Lista de regras de execução do programa-->
     <h2>Regras de execução do programa</h2>
     <ul>
        <li>O número maior sempre será subtraido pelo menor.</li>
        <li>Não serão permitidos valores vazios ou não numéricos.</li>
     </ul>     
</main>
        <!--Exibindo valores e validando resultado-->
        <section>
                <h2>Resultado</h2>
            <?php
            //Caso n1 seja maior que n2.
            if ($n1>$n2){
                $sub = $n1-$n2;
                echo "$n1 é maior que $n2, a diferença entre eles é: <strong>$sub</strong>";
            }else
            //Caso n2 seja maior que n1.
            if ($n1<$n2){
                $sub = $n2-$n1;
                echo "$n2 é maior que $n1, a diferença entre eles é:  <strong>$sub</strong>.";
            }
            //Caso sejam iguais.
            else{
                $sub = $n1-$n2;
                echo "Os Números são iguais, a diferença é: <strong>$sub</strong>.";
            }
            ?>
        </section>
</body>
</html>