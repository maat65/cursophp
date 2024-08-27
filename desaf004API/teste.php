<?php 

$inicio = date("m-d-Y", strtotime("-7 days"));
$fim = date("m-d-Y");

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true); // Faz com que fique dentro de um array, caso não haja true ou seja false, ele estará dentro de um objeto

$cotacao = $dados["value"][0]["cotacaoCompra"];

echo("A cotação atual é de <strong>$cotacao</strong>");

?>