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
    <h1>Resultado Final</h1>
        <p>
            <?php
              // Pegando numero através do "name" do input.
              //$num = 19;
              //$a = $num - 1;
              //$s = $num + 1;
              $numero = $_GET["numero"] ?? "sem numero"; // caso não haja numero.
              $sucessor = ($numero + 1);
              $antecessor = ($numero - 1);
              echo "<p>O número escolhido foi <strong>$numero</strong>";
              echo "<br>O seu antecessor é $antecessor";
              echo "<br>O seu sucessor é $sucessor";
            ?>
        </p>
        <!--Link para retornar a página anterior-->
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    
</body>
</html>