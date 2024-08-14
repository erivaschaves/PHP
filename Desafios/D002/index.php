<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Trabalhando com números aleatórios</h1>
        <p>
            <?php
              //Gerando número aleatório
              $num = mt_rand(0,100);
              echo "<p>Gerando um número aleatório entre 0 e 100...";
              echo "<br>O Valor gerado foi <strong>$num</strong> ";
            ?>
        </p>
        <!--Link para gerar outro número aleatório-->
        <button onclick = "window.location.reload()">&#x2B05; Gerar outro</button>
    
</body>
</html>