<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do antecessor e sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Antecessor e Sucessor do número</h1>
        <?php 
            $num = $_GET["numero"];
            $antecessor = $num - 1;
            $sucessor = $num + 1;

            echo("<p>O número <strong>$num</strong> possui como antecessessor o número <strong>$antecessor</strong> e como sucessor o número <strong>$sucessor</strong></p>");
    
    
        ?>
    </main>
    
</body>
</html>