<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6: Reajustador de preço</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET["preco"] ?? 1000;
        $reajuste = $_GET["reajuste"] ?? 50;

    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco)">Preço do produto (R$)</label>
            <input type="number" name="preco" id="idpreco" value = "<?=$preco?>">
            <label for="reajuste">Qual será o percentual de reajuste? <strong><?=$reajuste?>%</strong></label>
            <input type="range" name="reajuste" id="idreajuste" min = "0" max = "100" value = "<?=$reajuste?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $calculo = $preco + $preco * (1/100 * $reajuste);
            echo("O produto que custava R\$" . number_format($preco, 2, ",", ".") . ", com <strong>" . number_format($reajuste, 0, ",", ".") . "% de aumento </strong>vai passar a custar <strong>R\$" . number_format($calculo, 2, ",", ".") . "</strong> a partir de agora.");
        ?>
    </section>
</body>
</html>