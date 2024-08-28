<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8: Caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET["valor"] ?? 235;
    ?>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar (R$)</label>
            <input type="number" name="valor" id="idvalor" value = "<?=$valor?>">
            <p>*Notas disponíveis: R$100,00, R$50,00, R$10,00 e R$5,00</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
            $sobra = $valor;
            // Nota de 100
            $cem = intdiv($sobra, 100);
            $sobra = $sobra % 100;
            // Nota de 50
            $cinq = intdiv($sobra, 50);
            $sobra = $sobra % 50;
            // Nota de 20
            $vint = intdiv($sobra, 20);
            $sobra = $sobra % 20;
            // Nota de 10
            $dez = intdiv($sobra, 10);
            $sobra = $sobra % 10;
            // Nota de 5
            $cinc = intdiv($sobra, 5);
            $sobra = $sobra % 5;
            // Nota de 2
            $dois = intdiv($sobra, 2);
            $sobra = $sobra % 2;
            // Nota de 1
            $um = $sobra;

        ?>
        <h2>Saque de R$<?=number_format($valor, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="./notas/100-reais.jpg"/>x<?=$cem?></li>
            <li><img src="./notas/50-reais.jpg"/>x<?=$cinq?></li>
            <li><img src="./notas/20-reais.jpg"/>x<?=$vint?></li>
            <li><img src="./notas/10-reais.jpg"/>x<?=$dez?></li>
            <li><img src="./notas/5-reais.jpg"/>x<?=$cinc?></li>
            <li><img src="./notas/2-reais.jpg"/>x<?=$dois?></li>
            <li><img src="./notas/1-real.jpg"/>x<?=$um?></li>
        </ul>
 
    </section>
</body>
</html> 