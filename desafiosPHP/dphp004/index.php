<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4: Médias aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $v1 = $_GET["v1"] ?? 0;
            $p1 = $_GET["p1"] ?? 1;
            $v2 = $_GET["v2"] ?? 0;
            $p2 = $_GET["p2"] ?? 1;
        ?>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Primeiro valor</label>
            <input type="number" name="v1" id="v1">
            <label for="p1">Primeiro peso</label>
            <input type="number" name="p1" id="p1" min = "1">
            <label for="v2">Segundo valor</label>
            <input type="number" name="v2" id="v2">
            <label for="p2">Segundo peso</label>
            <input type="number" name="p2" id="p2" min = "1">
            <input type="submit" value="Calcular médias">
        </form>
    </main>
    <section>
        <h1>Cálculo das Médias</h1>
        <?php 
            $msimples = ($v1 + $v2) / 2;
            $mponderada = (($v1 * $p1) + ($v2 * $p2)) / ($p1 + $p2);
            echo("<p>Analisando os valores $v1 e $v2: ");
            echo("<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($msimples, 2, ",", ".") . "</li>");
            echo("<li>A <strong>Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual a " . number_format($mponderada, 2, ",", ".") . "</li></ul>")
        ?>
    </section>
</body>
</html>