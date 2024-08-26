<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $segundos = $_GET['num'] ?? 0;
        $minutos =(integer)($segundos / 60);
        $horas = (integer)($minutos / 60);
        $dias = (integer)($horas/24);
        $semanas = (integer)($dias/7);
        $totDias = (($semanas * 7) - $dias) * -1;
        $totHoras = (($dias * 24) - $horas) * -1;
        $totMinutos = (($horas * 60) - $minutos) * -1;
        $totSegundos = (($minutos * 60) - $segundos) * -1;
    ?>
    <!--Criando formulário SERVER PHP_SELF e inputs-->
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>"method = "get">
            <label for="num">Qual é o total de segundos?</label>
            <input type="number" name="num" id="num">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando Tudo</h2>
        <?php
            echo "Analisando o valor que você digitou, <strong>".number_format($segundos, 0, "." , "." )." segundos</strong> equivalem a um total de:
            <ul>
                <li>$semanas semanas</li>
                <li>$totDias dias</li>
                <li>$totHoras horas</li>
                <li>$totMinutos minutos</li>
                <li>$totSegundos segundos</li>
            </ul>" 
        ?>
    </section>
    
</body>
</html>