<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Envio do formulario</h1>
    </header>
    <main>
        <?php
            $nome = $_GET["nome"] ?? "Sem Nome"; // o ?? é usado caso não tenha nenhuma entrada para nome
            $sobrenome = $_GET["sobrenome"] ?? "Sem Sobrenome"; // o ?? é usado caso não tenha nenhuma entrada para sobrenome
            echo("Isso é um teste, <strong>$nome $sobrenome</strong>, seja bem-vindo(a)");
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a tela anterior</a></p>
    </main>
</body>
</html>