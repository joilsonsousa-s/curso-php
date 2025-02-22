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
        $valProduto = $_GET["vlProduto"] ?? 0;
        $pctReajuste = $_GET["pctReajuste"] ?? 0;
    ?>

    <main>
        <h1>Reajustador de Preços</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="vlProduto">Preço do Produto (R$)</label>
            <input type="number" name="vlProduto" id="vlProduto" value="<?=$valProduto?>">

            <label for="porReaj">Qual será o percentual de reajuste? <strong><span id="range"><?=$pctReajuste?></span>%</strong></label>
            <input type="range" name="pctReajuste" id="pctReajuste" value="<?=$pctReajuste?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado do Reajuste</h2>

        <?php 
            $valProdao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $novoReajuste = ($valProduto * ($pctReajuste / 100)) + $valProduto ;

            echo "<p>O produto que custava ".numfmt_format_currency($valProdao, $valProduto, "BRL")." com <strong> $pctReajuste% de aumento</strong> vai passar a custar <strong>".numfmt_format_currency($valProdao, $novoReajuste, "BRL")."</strong> a partir de agora.</p>";
        ?>
    </section>

    <script>
        let inputRange = document.getElementById("pctReajuste");
        let range = document.getElementById("range");

        inputRange.addEventListener("input", ()=> {
            range.innerHTML = inputRange.value;
        });
    </script>
</body>
</html>