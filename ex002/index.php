<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Horas e Datas</title>
</head>
<body>
    <h1>Codigo PHP Horas e Datas</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // setando o fuso horario para o de sao paulo 
        echo("Hoje é dia " . date("d/M/Y")); // d = dia, M = mes, Y = ano
        echo(" e o horário é " . date("G:i:s T")); // G = horas, i = minutos, s = segundos, T = fuso
    ?>
</body>
</html>