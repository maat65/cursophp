<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2: Sorteador de número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Desafio 2: Sorteador de número</h1>
        <?php 
            $min = 0;
            $max = 100;
            $num = random_int($min, $max);

            echo("<p>O número gerado aleatoriamente entre $min e $max, foi o <strong>$num</strong></p>");
        ?>
        <button onclick="javascript:document.location.reload()">;Gerar outro número</button> <!-- Botão para que possa ser gerado outro numero -->
    </main>

</body>
</html>