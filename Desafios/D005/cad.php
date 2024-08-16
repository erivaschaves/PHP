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
              $num = 1256.123;
              // Convertendo o número para inteiro
              $inteiro = (integer) $num;
              $real = $num - $inteiro;
              //usando o metodo $_GET , $_POST ou $_REQUEST
              //$numero = $_GET["numero"] ?? 0; // caso não haja numero.
	         echo "Analisando o número <strong>".number_format($num, 3,",", ".")."</strong> informado pelo usuário:<br>";
             //Criando lista simples não ordenada
             echo
             "<ul>
                <li>A parte inteira do número é <strong>".number_format($inteiro, 0,",", ".")."</strong></li>
                <li>A parte fracionária do número é <strong>".number_format($real, 3,",", ".")."</strong></li> 
             </ul>";
            ?>
        </p>
        <!--Link para retornar a página anterior-->
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    
</body>
</html>