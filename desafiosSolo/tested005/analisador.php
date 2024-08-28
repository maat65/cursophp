<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de número real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_GET["numero"] ?? 0;
            $inteira = (int) $num;
            $fracionada = $num - $inteira;
            echo("<p>Analisando o número <strong>". number_format($num, 3, ",", ".") . "</strong></p>");
            echo("<ul><li>A parte inteira do número é <strong>" . number_format($inteira, 0, ",", ".") . "</strong></li>");
            echo("<li>A parte fracionada do número é <strong>" . number_format($fracionada, 3, ",", ".") . "</strong></li></ul>");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar para o menu</button>
    </main>
</body>
</html>