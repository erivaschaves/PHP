<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Numéricas</title>
    <!--Carregando estilo css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    // Capturando os dados do Formulário
    $n1 = $_GET["n1"] ?? "0"; // caso não haja numero.
    $n2 = $_GET["n2"] ?? "0"; // caso não haja numero.
    $n3 = $_GET["n3"] ?? "0"; // caso não haja numero.
?>
<main>
 <!--Título-->
    <h1>Operações numéricas</h1>
    <!--Criando formulário-->
    <form action="index.php" method="get">
        <label for="n1">Valor 1:</label>
        <input type="number" name="n1" id="n1" placeholder="Valor 1" required>
        <p>
            <label for="n2">Valor 2:</label>
            <input type="number" name="n2" id="n2" placeholder="Valor 2" required>
        </p>
        <p>
            <label for="n3">Valor 3:</label>
            <input type="number" name="n3" id="n3" placeholder="Valor 3" required>
        </p>
        <p>
            <input type="submit" value="Calcular" id="calcular">
            <input type="reset" value="Limpar" id="limpar">
        </p>
    </form>
    <!--Lista de regras de execução do programa-->
     <h2>Regras de execução do programa</h2>
     <ul>
        <li>Não serão permitidos valores vazios ou não numéricos.</li>
        <li>Caso o valor 1 seja maior que 0 será impressa sua raiz quadrada, caso contrário seu quadrado.</li>
        <li>No valor 2, somente serão permitidos valores entre 10 e 100.</li>
        <li>Caso valor 3 seja menor que o valor 2, será exibida sua diferença, caso contrário será somado 1 ao valor 3.</li>
        <li>Caso não seja digitado um número será considerado o valor 0.</li>
     </ul>    
</main>

<!--Exibindo valores e validando resultado-->
<section>
    <h2>Resultado</h2>
    <?php
            //raiz quadrada do valor
            if ($n1 > 0) {
                $raiz = sqrt($n1);
                // exibindo o valor com 1 casa decimal com number format
                echo "<p>A raiz quadrada do valor $n1 é: ".number_format($raiz,1 ,".",",").".</p>";
            }else {
                $quad = $n1**2;
                echo "<p>O quadrado do valor $n1 é: $quad.</p>";
            }
            if ($n2 >= 10 && $n2 <= 100){
                 echo "<p>O número $n2 está entre 10 e 100 - intervalo permitido.</p>";
            }else {
                 echo "<p>O número $n2 não está entre 10 e 100 - favor digitar um valor válido.</p>";
            }if ($n3<$n2){
                $dif = $n2 - $n3;
                echo "<p>A diferença entre $n2 e $n3 é: $dif.</p>";
            } else{
                $soma = $n3 + 1;
                 echo "<p>O valor $n3 + 1 é: $soma.</p>";
            }
    ?>
</section>
    
</body>
</html>