<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias de Natação</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
// Capturando os dados do Formulário
   $idade = $_GET['id'] ?? "1"; //Será considerado valor 1 se estiver vazio.
?>
<body>
    <main>
        <form action="index.php">
            <!--Título-->
            <h1>Categorias de Natação</h1>
            <!--Criando labels ,inputs e botões-->
            <div>
                <label for="id">Informe a Idade:</label>
                <input type="number" name="id" id="id" min="0" placeholder="Idade" required>
            
            </div>
            <p>
                <input type="submit" value="Validar" id="validar">
                <input type="reset" value="Limpar" id="limpar">
            </p> 
        </form>
        <h2>Regras de execução do programa</h2>
        <ul>
            <li>Não serão permitidos valores vazios ou não numéricos.</li>
            <li>A categoria será informada de acordo com a tabela.</li>
        </ul>
        <!--Tabela Com categorias de natação-->
        <table>
            <caption>Tabela com categorias de natação</caption>
            <!--Cabeçalho da Tabela-->
            <thead>
                <th scope="col" style="width: 30px;">Idade</th>
                <th scope="row" style="width: 50px;">Categoria</th>
            </thead>
            <!--Corpo da Tabela-->
            <tbody>
                <!--Criando linha e itens-->
                <tr>
                    <td>Menor de 5 anos</td>
                    <td>Não pode nadar</td>
                </tr>
                <tr>
                    <td>Entre 5 e 7 anos</td>
                    <td>Infantil A</td>
                </tr>
                <tr>
                    <td>Entre 8 e 10 anos</td>
                    <td>Infantil B</td>
                </tr>
                <tr>
                    <td>Entre 11 e 13 anos</td>
                    <td>Juvenil A</td>
                </tr>
                <tr>
                    <td>Entre 11 e 13 anos</td>
                    <td>Juvenil A</td>
                </tr>
                <tr>
                    <td>Entre 14 e 17 anos</td>
                    <td>Juvenil B</td>
                </tr>
                <tr>
                    <td>18 anos ou acima</td>
                    <td>Sênior</td>
                </tr>
            </tbody>
        </table>    
    </main>

    <section>
        <h2>Resultado</h2>
        <?php
            //Validando a idade e exibindo a categoria 
            if ($idade < 5) {
                echo "Não pode nadar";
                }else if ($idade >=5 && $idade <=7){
                echo "Infantil A";
                }else if ($idade >=8 && $idade <=10){
                echo "Infantil B";
                }else if ($idade >=11 && $idade <=13){
                echo "Juvenil A";
                }else if ($idade >=14 && $idade <=17){
                echo "Juvenil B";
                }else if ($idade >=18){
                echo "Sênior";
                } 
        ?>
    </section>

    
</body>
</html>