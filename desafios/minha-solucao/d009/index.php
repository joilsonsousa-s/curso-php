<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET["v1"] ?? 0;
        $peso1 = $_GET["p1"] ?? 1;
        $valor2 = $_GET["v2"] ?? 0;
        $peso2 = $_GET["p2"] ?? 1;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$peso1?>">

            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" value="<?=$peso2?>">

            <input type="submit" value="Cálcular Médias">
        </form>
    </main>

    <section id="resultado">
        <h2>Cálculo das Médias</h2>

        <?php 
            $medAritSimples = ($valor1 + $valor2) / 2;
            $medAritPonderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

            echo "<p>Analisando os valores $valor1 e $valor2:</p>";

            echo "<ul>";
                echo "<li>
                        <strong>Média Aritmética Simples</strong> entre os valores é igual a ".number_format($medAritSimples, 2, ",", ".").".
                    </li>";
                echo "
                    <li>
                        <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ".number_format($medAritPonderada, 2, ",", ".").".
                    </li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>