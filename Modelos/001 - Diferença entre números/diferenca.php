<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença entre Valores</title>
</head>
<body>
<!--Título-->
<h1>Diferença entre valores</h1>
<p>
    <?php
        $n1 = $_GET["n1"] ?? "0"; // caso não haja numero.
        $n2 = $_GET["n2"] ?? "0"; // caso não haja numero.
        //Caso n1 seja maior que n2. 
        if ($n1>$n2){
            $sub = $n1-$n2;
            echo ` $n1 é maior que $n2, a diferença entre eles é: <strong>$sub</strong>`;
        }else
        //Caso n2 seja maior que n1. 
        if ($n1<$n2){
            $sub = $n2-$n1;               
            echo `$n2 é maior que $n1, a diferença entre eles é:  <strong>$sub</strong>.`;
        }
        //Caso sejam iguais.
        else{
            $sub = $n1-$n2;
            echo `Os Números são iguais, a diferença é: <strong>$sub</strong>.`;
        }
    ?>
</p>    
<!--Link para retornar a página anterior-->
<button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    
</body>
</html>