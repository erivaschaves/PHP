<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Aluno</title>
</head>
<?php
    // Capturando os dados do Formulário
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $freq = $_GET['freq'];
    $media = ($n1 + $n2) / 2;
?>
<body>
    <main>
        <!--Criando formulário get-->
        <form action="index.php" method="get">
            <!--Título-->
            <h1>Resultado do Aluno</h1>
            <!--Criando labels ,inputs e botões-->
                <p>
                    <label for="n1">Informe a Nota 1:</label>
                    <input type="number" name="n1" id="n1" required min="0" max="10" value="0" placeholder="Nota 1" >
                </p>
                <p>
                    <label for="n2">Informe a Nota 2:</label>
                    <input type="number"  name="n2" id="n2" required min="0" max="10" value="0"  placeholder="Nota 2" >
                </p>
                <p>
                    <label for="freq">Informe a Frequência:</label>
                    <input type="number" name="freq" id="freq" min="0" max="40" value="0" required placeholder="Frequência">
                </p>
                <p>
                    <input type="button" value="Validar" id="validar">
                    <input type="reset" value="Limpar" id="limpar">
                </p>
        
            <!--Lista regras de execução do programa-->
            <h2>Regras de execução do programa</h2>
            <ul>
                <li>Não serão permitidos valores vazios ou não numéricos.</li>
                <li>São 40 aulas, para aprovação a frequência deve ser 75%.</li>
                <li>A média é aritmética de no mínimo 6.0 para aprovação.</li>
            </ul>
        </form>

    </main>

    <section>

    </section>
    
</body>
</html>