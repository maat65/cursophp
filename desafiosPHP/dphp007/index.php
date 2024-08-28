<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7: Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $tempo = $_GET["tempo"] ?? 450;
    ?>  
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="tempo">Qual é o total de tempo em segundos?</label>
            <input type="number" name="tempo" id="idtempo">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            // Variável sobra
            $sobra = $tempo;    
            // Semanas
            $semanas = intdiv($sobra, 604800);
            $sobra = $sobra % 604800;
            // Dias
            $dias = intdiv($sobra, 86400);
            $sobra = $sobra % 86400;
            // Horas
            $horas = intdiv($sobra, 3600);
            $sobra = $sobra % 3600;
            // Minutos
            $minutos = intdiv($sobra, 60); 
            $segundos = $tempo % 60; 
        ?>
        <p>Analisando o valor que você digitou, <strong><?=$tempo?> segundos</strong> equivalem a um total de: </p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>