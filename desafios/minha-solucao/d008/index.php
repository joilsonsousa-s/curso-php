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
        $num = $_GET["num"] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">

            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>

        <?php 
            $raizQuadrada = sqrt($num);
            $raizCubica = pow($num,(1/3));

            echo "<p>Analisando o <strong>número $num</strong>, temos:</p>";
            echo "<ul>";
                echo "<li>A sua raiz quadrada é <strong>".number_format($raizQuadrada, 3,",",".")."</strong></li>";
                echo "<li>A sua raiz cúbica é <strong>".number_format($raizCubica, 3,",",".")."</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>