<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3 de raízes de um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET["numero"] ?? 1;

    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Calcular raízes">
        </form>
    </main>
    <section>
    <?php 
        $quadrado = $numero ** (1/2); // sqrt($numero)
        $cubica = $numero ** (1/3);
        echo"<h1>Resultado final</h1>";
        echo"<p>Analisando o <strong>número " . $numero . ", temos: </p>";
        echo"<ul><li>A sua raiz quadrada é <strong>" . number_format($quadrado, 3, ",", ".") . "</strong></li>";
        echo"<li>A sua raiz cúbica é <strong>" . number_format($cubica, 3, ",", ".") . "</strong></li></ul>";
    ?> 
    </section>
     
</body>
</html>