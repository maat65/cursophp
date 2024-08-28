<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de gerador de número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Gerador de número aleatório entre 0 e 100</h1>
        <?php 
            $min = 0;
            $max = 100;
            $num = random_int($min, $max);
            echo("<p>O número aleatório gerado entre $min e $max é o número <strong>$num</strong></p>")
        ?>
        <button onclick="javascript:document.location.reload()">Gerar outro número</button>
    </main>
</body>
</html>