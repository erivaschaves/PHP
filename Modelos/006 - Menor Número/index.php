<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menor Número</title>
    <!--Carregando estilo css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Capturando os dados do Formulário
        $v1 = $_GET['v1'] ?? "0";
        $v2 = $_GET['v2'] ?? "0";
        $v3 = $_GET['v3'] ?? "0";
        $men = $v1;
    ?>
    <main>
        <form action="index.php" method="get">
            <!--Título-->
            <h1>Menor Número</h1>
            <!--Criando labels ,inputs e botões-->   
                <p>
                    <label for="v1">Informe o Valor 1: </label>
                    <input type="number" name="v1" id="v1" placeholder="Valor 1" required>
                </p>
                <p>
                    <label for="v2">Informe o Valor 2: </label>
                    <input type="number" name="v2" id="v2"  placeholder="Valor 2" required>
                </p>
                <p>
                    <label for="v3">Informe o Valor 3: </label>
                    <input type="number" name="v3" id="v3" placeholder="Valor 3" required>
                </p>
                <p>
                    <input type="submit" value="Validar" id="validar">
                    <input type="reset" value="Limpar" id="limpar">
                </p>

            <!--Lista de regras do programa-->
            <h2>Regras de execução do programa</h2>
            <ul>
                <li>Não serão permitidos valores vazios ou não numéricos.</li>
                <li>Independente da ordem será informado o menor número.</li>
            </ul>
        </form>

    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            //Validando menor valor
            if ($v1 == $v2 && $v2 == $v3){
                echo "Os Valores são iguais.";
            }else if ($v2 < $v1 && $v2 < $v3){
                $men = $v2;
                echo "O Valor menor é $men.";
            }else if ($v3 < $v1 && $v3 < $v2){
                 $men = $v3;
                echo "O Valor menor é $men.";
            }else {
                echo "O Valor menor é $men.";   
            }
        ?>
    </section>
    
</body>
</html>