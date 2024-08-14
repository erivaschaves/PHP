<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Conversor de Moedas</h1>
        <p>
            <?php
              // Pegando numero através do "name" do input.
              $real = 1000;
              $cotação = 5.17;
              $dolar = $real/$cotação;
              //$s = $num + 1;
              //$numero = $_GET["numero"] ?? "sem numero"; // caso não haja numero.
              echo "<p>Seus R\$" .number_format($real, 2, "," , ".")." equivalem a US\$".number_format($dolar, 2, "," , "."); 
            ?>
        </p>
        <!--Link para retornar a página anterior-->
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    
</body>
</html>