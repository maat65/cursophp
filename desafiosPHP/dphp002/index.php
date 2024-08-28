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
        $minimo = 1380.60;
        $salario = $_GET["salario"] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 
            $numero = intdiv($salario, $minimo); // $numero = $salario / $minimo;
            $resto = $salario % $minimo; // $resto = $salario - ((int)$numero * $minimo);
            echo("<h1>Resultado Final</h1>");
            echo("<p>Quem recebe um salário de R\$" . number_format($salario, 2, ",", ".") . " ganha <strong>" . (int)$numero . " salários mínimos + R\$" . number_format($resto, 2, ",", ".") . "</strong></p>");
        ?>
    </section>
    
</body>
</html>