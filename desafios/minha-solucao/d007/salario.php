<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        section > div {
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
        $salarioCliente = $_GET["sal"] ?? 0;
        $salarioMinimo = 1518;
    ?>

    <main>
        <h1>Informe seu Salário</h1>

        <form action="<?echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário R$: </label>
            <input type="number" name="sal" id="sal" value="<?=$salarioCliente?>">

            <p>Considerando o salário mínimo de R$<strong><?=number_format($salarioMinimo,2,',',".")?></strong></p>

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>

        <?php
            $ganhoSalarioMinimo = (int)($salarioCliente / $salarioMinimo);
            $restante = $salarioCliente - ($ganhoSalarioMinimo * $salarioMinimo);

            echo "<p>Quem recebe um salário de R\$".number_format($salarioCliente, 2, ",",".")." ganha <strong>$ganhoSalarioMinimo salários mínimos</strong> + R\$$restante</p>";
        ?>
</body>
</html>