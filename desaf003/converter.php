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
            $cotacao = 5.51;
            $real = $_GET["real"] ?? 0;
            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); // Função para internacionalização das moedas

            echo("O valor <strong>" . numfmt_format_currency($padrao, $real, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>");

            // echo("<p>O valor <strong>R\$" . number_format($valor, 2, ",", ".") . "</strong> equivale a um total de <strong>U\$" . number_format($dolar, 2, ",", ".") ."</strong> dólares");
    
        ?>
    </main>
</body>
</html>