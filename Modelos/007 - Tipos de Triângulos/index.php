<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Triângulos</title>
    <!--Carregando estilo css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Capturando os dados do Formulário
        $v1 = $_GET['v1'] ?? "0";
        $v2 = $_GET['v2'] ?? "0";
        $v3 = $_GET['v3'] ?? "0";
        $img = 'Interrogação.png';
        
    ?>
    <main>
        <form action="index.php" method="get">
                <!--Título-->
                <h1>Tipos de Triângulos</h1>
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
                    <li>Caso os 3 valores sejam iguais, o Triângulo será equilátero.</li>
                    <li>Caso os 3 valores sejam diferentes, o Triângulo será escaleno.</li>
                    <li>Caso 2 valores sejam iguais,o Triângulo será isóceles.</li>
                    <li>Caso 1 dos valores seja menor que a soma dos outros 2 ou menor ou igual a 0 não formarão um triângulo.</li>
                </ul>
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php
        //Validando e exibindo o tipo de triângulo
            if(($v1 + $v2) < $v3 || ($v1 + $v3) < $v2 || ($v2 + $v3 < $v1) || $v1 <=0 || $v2 <=0 || $v3 <=0){
                echo "Não formam um Triângulo.";
            }else if ($v1 == $v2 && $v1 == $v3) {
                echo "Triâgulo equilátero.";
                $img = 'Equilátero.png';
            }else if ( $v1 != $v2 && $v1 != $v3 && $v2 != $v3){
                echo "Triângulo escaleno.";
                $img = 'Escaleno.png';
            }else if( ($v1 == $v2 && $v1!= $v3) ||($v1 == $v3 &&  $v1 != $v2 ) ||($v2 == $v3 &&  $v2 != $v1 ) ){
                echo "Triângulo isóceles.";
               $img = 'Isósceles.png';
            } 
        ?>
        <div>
        <p><img id="img" src="<?=$img?>" alt="Foto do triângulo"></p>
        </div>
    </section>
    
    
</body>
</html>