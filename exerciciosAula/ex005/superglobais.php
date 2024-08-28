<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "Segunda", time() + 3600); // Função usada para setar um cookie para ser utilizado no var_dump, onde mostra que o dia-da-semana possui Segunda dentro dele, e possuirá um delay de 3600 segundos (1 hora) para que desapareça

                session_start();
                $_SESSION["Teste"] = "Funcionou!";

                echo ("<h1>SuperGlobal GET</h1>"); // Dados que estão presentes na URL
                var_dump($_GET);
            
                echo ("<h1>SuperGlobal POST</h1>"); // Dados que estão por dentro do código (?)
                var_dump($_POST);

                echo ("<h1>SuperGlobal REQUEST</h1>"); // Junção dos dados contidos no GET e POST
                var_dump($_REQUEST);

                echo ("<h1>SuperGlobal COOKIE</h1>");
                var_dump($_COOKIE);

                echo ("<h1>SuperGlobal SESSION</h1>");
                var_dump($_SESSION);

                echo ("<h1>SuperGlobal ENV</h1>");
                var_dump($_ENV);

                echo ("<h1>SuperGlobal SERVER</h1>"); // É dito que o ["PHP_SELF"] será útil no futuro
                var_dump($_SERVER);

                echo ("<h1>SuperGlobal GLOBALS</h1>"); // QUERY_STRING = DADOS QUE ESTAO NA URL
                var_dump($GLOBALS); // É uma super global geral, que possui todos os arrays e conteúdos dele, e une em apenas um array
            ?>
        </pre>
    </main>
</body>
</html>