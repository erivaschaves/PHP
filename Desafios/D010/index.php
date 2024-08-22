<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a sua idade</title>
    <!--Carregando arquivo css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    //Pegando valores dos inputs e ano atual com função date 
        $nascimento=$_GET['nasc']?? 2000;
        $anoAtual = date('Y');
        $ano = $_GET['ano'] ?? $anoAtual;
        $idade = $ano - $nascimento; 
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <!--Criando formulário SERVER PHP_SELF e inputs-->
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc">
            <label for="ano">Quer saber sua idade em que ano ?(atualmente estamos em <?="<strong>$anoAtual</strong>"?>)</label>
            <input type="number" name="ano" id="ano">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>

    <section>
        <!--Imprimindo Resultados--> 
        <h2>Resultado</h2>
        <?php
            print "Quem nasceu em $nascimento vai ter <strong>$idade anos</strong> em $ano!"; 
        ?>
    </section>
    
</body>
</html>