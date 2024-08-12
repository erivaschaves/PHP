<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        
    </header>
    <main>
    <h1>Resultado Final</h1>
        <?php
          // Pegando numero através do "name" do input.
          $numero = $_GET["numero"] ?? "sem numero"; // caso não haja numero.
          $sucessor = $numero++;
          $antecessor = $numero--;
          echo "<p>O número escolhido foi <strong>$numero</strong>";
          echo "<p> O seu antecessor é $antecessor";
          echo "<p> O seu antecessor é $sucessor";       
        ?>
        <!--Link para retornar a página anterior-->
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>