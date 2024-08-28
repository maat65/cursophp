<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5: Cálculo de idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoatual = (date("Y"));
        $nasc = $_GET["anoinicio"] ?? 2000;
        $anofinal = $_GET["anofinal"] ?? $anoatual;
    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoinicio">Em que ano você nasceu?</label>
            <input type="number" name="anoinicio" id="idanoinicio" min = "'1900" max = "2023" value = "<?=$nasc?>">
            <label for="anofinal">Quer saber sua idade em que ano? (atualmente estamos em <?=$anoatual?>)</label>
            <input type="number" name="anofinal" id="anofinal" min = "1900" value = "<?=$anofinal?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $anofinal - $nasc;
            echo("Quem nasceu em $nasc vai ter <strong>$idade anos</strong> em $anofinal");
        ?>
        <!-- <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$anofinal?></p> -->
    </section>
    
</body>
</html>