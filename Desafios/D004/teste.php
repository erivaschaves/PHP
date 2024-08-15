<pre>
    
    <?php
        //Pegando data e hora atua do sistema 7 dias antes ccom date
        $inicio = date("m-d-Y", strtotime("- 7 days"));
        $fim = date("m-d-Y");
        // Tratando as strings com \ da variável url
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        // Pegando Url api em json, com true para vetor ou false para objeto
        $dados = json_decode(file_get_contents($url), true);
        // Mostrando tipo da variável
        //var_dump($dados);
        // Criando cotação
        $cotação = $dados["value"][0]["cotacaoCompra"];
        //Exibindo cotação
        echo "A cotação foi $cotação";  
    
    ?>
</pre>