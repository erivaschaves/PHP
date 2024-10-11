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
    
    ?>
</p>    
<!--Link para retornar a página anterior-->
<button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    
</body>
</html>