<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de real para dólar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Valor convertido do Real para Dólar</h1>
        <?php 
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $dados = json_decode(file_get_contents($url), true); // Faz com que fique dentro de um array, caso não haja true ou seja false, ele estará dentro de um objeto
            
            $cotacao = $dados["value"][0]["cotacaoCompra"]; // Essa cotação veio da API do Banco Central do Brasil 
            $real = $_GET["real"] ?? 0;
            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); // Função para internacionalização das moedas

            echo("<p>O valor <strong>" . numfmt_format_currency($padrao, $real, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>");

            // echo("<p>O valor <strong>R\$" . number_format($valor, 2, ",", ".") . "</strong> equivale a um total de <strong>U\$" . number_format($dolar, 2, ",", ".") ."</strong> dólares");
    
        ?>
    </main>
</body>
</html>