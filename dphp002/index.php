<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1380;
        $salario = $_GET["salario"];
        $numero = $salario / $minimo;
        $resto = $salario - ((int)$numero * $minimo);
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 
            echo("<h1>Resultado Final</h1>");
            echo("Quem recebe um salário de R\$1.380,00 ganha <strong>" . (int)$numero . " salários mínimos + R\$" . number_format($resto, 2, ",", "."));
        
        ?>
    </section>
    
</body>
</html>