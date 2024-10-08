<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Obtendo os dados get do Formulário Retroalimentado
        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado da soma dos valores</h2>
        <?php 
            $resultado = $valor1 + $valor2;
            echo("<p>O resultado da soma de $valor1 e $valor2 é igual a <strong>$resultado</strong>");
        ?>
    </section>
</body>
</html>