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
        <h1>Resultado do processmento</h1>
    </header>
    <main>
        <?php
          // Pegando nome e sobrenome através do "name" do input.
          $nome = $_GET["nome"] ?? "sem nome"; // caso não haja nome.
          $sobrenome = $_GET["sobrenome"] ?? "desconhecido"; 
          echo "<p>É uma prazer te conhecer,<strong>$nome $sobrenome!</strong> Este é o meu site!" 
        ?>
        <!--Link para retornar a página anterior-->
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
    
</body>
</html>