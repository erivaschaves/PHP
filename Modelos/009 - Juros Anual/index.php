<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros Anual</title>
</head>
<body>
    <?php
        $valor = $_GET['valor'] ?? "1"; 
        $taxa = $_GET['taxa'] ?? "0";
        $anos = $_GET['anos'] ?? "0";
    ?>
    <main>
        <form action="index.php" method="get">
            <!--Título-->
            <h1>Juros Anual</h1>
            <!--Criando labels ,inputs e botões-->
                <p>
                    <label for="valor">Informe o valor depositado:</label>
                    <input type="number" name="valor" id="valor" placeholder="valor" min="1" step="0.01" required>
                </p>
                <p>
                    <label for="taxa">Informe o juros anual:</label>
                    <input type="number" name="taxa" id="taxa" placeholder="Juros" min="0" max="100" >
                </p>
                <p>
                    <label for="anos">Anos de acumulo:</label>
                    <input type="number" name="anos" id="anos" placeholder="anos" min="0" required >
                </p>
                <p><input type="submit" value="Calcular" id="calcular">
                   <input type="reset" value="Limpar" id="limpar">
                </p>
        </form>
    
        
        <!--Lista Regras de execução do programa-->
        <h2>Regras de execução do programa</h2>
        <ul>
            <li>Não serão permitidos valores vazios ou não numéricos.</li>
            <li>O valor de depositado mínimo é 1.</li>
            <li>O juros anual deve estar entre 0 e 100%.</li>
        </ul>

    </main>

    <section>
        <h2>Resultado</h2>
        <?php
                $juros = (($taxa/100) + 1);
                $acumulo = (($juros * $valor) * $anos);
                // Exibindo o valor em Real.
                echo "O Valor acumulado é: ${acumulo.toLocaleString('pt-BR', {style:'currency', currency:'BRL'})}."; 
        ?>
    </section>
    
</body>
</html>