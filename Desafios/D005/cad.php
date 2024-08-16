<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Analizador de Número Real</h1>
        <p>
            <?php
              // Pegando numero através do "name" do input.
              $num = 9327.832;
              $inteiro = (integer) $num;
              $real = $num - $inteiro;
              //$numero = $_GET["numero"] ?? "sem numero"; // caso não haja numero.
	         echo "Analisando o número <strong>$num</strong> informado pelo usuário:<br>";
             //Criando lista simples não ordenada
             echo
             "<ul>
                <li>A parte inteira do número é <strong>$inteiro</strong></li>
                <li>A parte fracionária do número é <strong>$real</strong></li> 
             </ul>";
            ?>
        </p>
        <!--Link para retornar a página anterior-->
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    
</body>
</html>