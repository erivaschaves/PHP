<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice de Poluição</title>
    <!--Carregando estilo css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $num = $_GET['num'] ?? "0"; 
    ?>
    <main>
        <form action="index.php" method="get">
            <!--Título-->
            <h1>Índice de Poluição</h1>
            <!--Criando labels ,inputs e botões-->
                <p>
                <label for="num">Informe o Indice: </label>
                <input type="number" name="num" id="num" min="0" placeholder="Indice" step="0.01" required>
                </p>
                <p>
                <input type="submit" value="Validar" id="validar" >
                <input type="reset" value="Limpar" id="limpar">
                </p>
            <!--Regras de execução do programa-->
            <h2>Regras de execução do programa</h2>
            <ul>
                <li>Não serão permitidos valores vazios ou não numéricos.</li>
                <li>A Medida de segurança será tomda de acordo com a tabela.</li>
                <li>O valor mínimo do índice é 0.</li>
            </ul>
    
            <!--Tabela com indices de poluição-->
            <table>
                <caption>Tabela com indices de poluição</caption>
                <!--Cabeçalho da Tabela-->
                <thead>
                    <th scope="col" style="width: 50px;">Índice</th>
                    <th scope="row" style="width: 50px;">Medida de segurança</th>
                </thead>
                <!--Corpo da Tabela-->
                <tr>
                    <td>Menor de que 0.3</td>
                    <td>Não é necessário suspender as atividades.</td>
                </tr>
                </tr>
                    <td>Entre 0.3 e menor 0.4</td>
                    <td>1º grupo suspende as atividades.</td>
                </tr>
                </tr>
                    <td>Entre 0.4 e menor 0.5</td>
                    <td>1º e 2º grupos suspendem as atividades.</td>
                </tr>
                </tr>
                    <td>Maior ou igual a 0.5</td>
                    <td>Todos os grupos suspendem as atividades.</td>
                </tr>
                </table>
            </form>

    </main>

    <section>
        <h2>Resultado</h2>
        <?php
        //Validando ídice e exibindo o resultado
            if ($num < 0.3){
                echo "Índice de poluição em <strong>$num</strong>, não é necessário suspender as atividades.";
            }else if ($num >= 0.3 && $num < 0.4){
                echo "Índice de poluição em <strong>$num</strong>, 1º grupo suspende as atividades.";
            }else if ($num >= 0.4 && $num < 0.5){
                echo"Índice de poluição em <strong>$num</strong>, 1º e 2º grupos suspendem as atividades.";
            }else if ($num >= 0.5){
                echo "Índice de poluição em <strong>$num</strong>, todos os grupos suspendem as atividades.";
            }
        ?>
    </section>
    
</body>
</html>