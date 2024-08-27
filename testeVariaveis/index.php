<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de variaveis em PHP</title>
</head>
<body>
    <h1>Tipos de variaveis em PHP</h1>
    <?php 
        // 0x = hexadecimal, 0b = binário, 0 = octal
        $string = "teste";
        $int = 10;
        $inthexa = 0x11; // deveria aparecer 17
        $intbin = 0b1110; // deveria aparecer 14
        $intoctal = 010; // deveria aparecer 8
        $float = 52.3;
        $booleano = true; a
        $teste = false;

        echo("<p>Esse é um exemplo de string: $string</p>");
        echo("<p>Esse é um exemplo de int: $int</p>");
        echo("<p>Esse é um exemplo de int: $inthexa</p>");
        echo("<p>Esse é um exemplo de int: $intbin</p>");
        echo("<p>Esse é um exemplo de int: $intoctal</p>");
        echo("<p>Esse é um exemplo de float: $float</p>");
        echo("<p>Esse é um exemplo de booleano true: $booleano</p>");
        echo("<p>Esse é um exemplo de booleano false: $teste</p>"); // O valor para variavel booleana false é vazio

        var_dump($int);
        var_dump($string);


        $nome = "teste";
        $mirante = "mirante";
        echo("<p>$nome \"Parque\" $mirante</p>") // a \ é considerado uma sequencia de escape

    ?>
    
</body>
</html>