<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saldo Médio</title>
    <!--Carregando arquivo de estilo css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
     // Capturando os dados do Formulário
        $saldo = $_GET['saldo'] ?? "1";
        //Formatação de moedas com internacionalização.
        $padrão = numfmt_create("pt_BR", NumberFormatter:: CURRENCY);
    ?>
    <main>
        <form action="index.php" method="get">
            <!--Título-->
        <h1>Saldo Médio</h1>
        <!--Criando labels ,inputs e botões-->
            <label for="saldo">Informe o saldo médio do cliente: </label>
            <input type="number" name="saldo" id="saldo" min="1" placeholder="saldo" required >
            <p>
                <input type="submit" value="Calcular" id="calcular">
                <input type="reset" value="Limpar" id="limpar">
            </p>
        
        <!--Lista Regras de execução do programa-->
        <h2>Regras de execução do programa</h2>
        <ul>
            <li>Não serão permitidos valores vazios ou não numéricos.</li>
            <li>O saldo médio deve ser no mínimo 1.</li>
            <li>Dependendo do valor do saldo,haverá crédito conforme a seguinte tabela.</li>
        </ul>
        <!--Tabela de crédito por saldo-->
        <table>
            <caption>Tabela de crédito por saldo</caption>
            <!--Cabeçalho da Tabela-->
            <thead>
                <th scope="col" style="width: 30px;">Saldo</th>
                <th scope="row" style="width: 50px;">Crédito</th>
            </thead>
            <!--Corpo da Tabela-->
            <tr>
                <td>Menor de que R$ 201.</td>
                <td>Nenhum crédito.</td>
            </tr>
            </tr>
                <td>Entre R$201 e R$400.</td>
                <td>Crédito de 20%.</td>
            </tr>
            </tr>
                <td>Entre R$401 e R$600</td>
                <td>Crédito de 30%.</td>
            </tr>
            </tr>
                <td>Maior que R$600</td>
                <td>Crédito de 40%.</td>
            </tr>
        </table>
        </form>

    </main>

    <section>
        <h2>Resultado</h2>
        <?php
        //Validando e Exibindo o valores em Real.
            if ($saldo <=200.99){
                echo "Nenhum crédito.";
                }else if ($saldo >=201 && $saldo<=400){
                $credito = $saldo * 0.20;
                // Exibindo o valores em Real.
                echo "O saldo médio é: <strong>" .numfmt_format_currency($padrão,$saldo, "BRL")."</strong>.<br> O valor do crédito é: <strong>" .numfmt_format_currency($padrão,$credito, "BRL")."</strong>.";
                }else if ($saldo >= 401 && $saldo <= 600){
                $credito = $saldo * 0.30;
                echo "O saldo médio é: <strong>" .numfmt_format_currency($padrão,$saldo, "BRL")."</strong>.<br> O valor do crédito é: <strong>" .numfmt_format_currency($padrão,$credito, "BRL")."</strong>.";
                }else if ($saldo > 600){
                $credito = $saldo * 0.40;
                echo "O saldo médio é: <strong>" .numfmt_format_currency($padrão,$saldo, "BRL")."</strong>.<br> O valor do crédito é: <strong>" .numfmt_format_currency($padrão,$credito, "BRL")."</strong>.";
            }
        ?>
    </section>
    
</body>
</html>