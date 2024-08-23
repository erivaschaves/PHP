<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <!--Criando formulário SERVER PHP_SELF e inputs-->
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="num">Qual é o total de segundos?</label>
            <input type="number" name="num" id="num">
            <input type="submit" value="Calcular">

        </form>
    </main>

    <section>
        <h2>Totalizando Tudo</h2>
        <?php
            echo "analisando o valor que você digitou, <strong>450 segundos</strong> equivalem a um total de:
            <ul>
                <li>0 semanas</li>
                <li>0 dias</li>
                <li>0 horas</li>
                <li>0 minutos</li>
                <li>0 segundos</li>
            </ul>" 
        ?>
    </section>
    
</body>
</html>