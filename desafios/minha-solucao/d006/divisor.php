<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        section > div {
            width: 470px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        section > div p {
            flex-basis: 44.44%;
            height: 100px;
            font-size: 1.5em;
            font-weight: 600;
            text-align: center;
            line-height: 4em;
            margin: 0;
        }

        section > div p:nth-child(2) {
            border-left: 2px solid black;
            border-bottom: 2px solid black;
        }

        section > div p:nth-child(3) {
            text-decoration: underline;
        }

        section > div p:nth-child(4) {
            border-left: 2px solid black;
        }
    </style>
</head>
<body>
    <?php 
        $n1_diviD = $_GET["n1"] ?? 1;
        $n2_diviS = $_GET["n2"] ?? 0;
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>

        <form action="<?echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">Dividindo: </label>
            <input type="number" name="n1" id="n1" value="<?=$n1_diviD?>">

            <label for="n2">Divisor: </label>
            <input type="number" name="n2" id="n2" value="<?=$n2_diviS?>">

            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>

        <?php
            $divisor = (int) ($n1_diviD / $n2_diviS);
            $restoDivis = (int) ($n1_diviD % $n2_diviS);

            print "<div>";
                print "<p><strong>$n1_diviD</strong></p>";
                print "<p><strong>$n2_diviS</strong></p>";
                print "<p><strong>$restoDivis</strong></p>";
                print "<p><strong>$divisor</strong></p>";
            print "</div>";
        ?>
</body>
</html>