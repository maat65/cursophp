<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Antecessor e Sucessor</h1>
    </header>
    <main>
        <?php 
            $num = $_GET["numero"];
            $antecessor = $num - 1;
            $sucessor = $num + 1;
            echo("O número escolhido foi <strong>$num</strong><br><br>");
            echo("O antecessor do número <strong>$num</strong> é <strong>$antecessor</strong><br>");
            echo("O sucessor do número <strong>$num</strong> é <strong>$sucessor</strong><br>");
        ?>
    </main>
</body>
</html>