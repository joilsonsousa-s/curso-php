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
        $anoNasc = $_GET["anoNasc"] ?? 2000; // Ano atual
        $anoDefi = $_GET["anoDefi"] ?? date("Y"); // Ano definido pelo usuário
        $idade = (int) ($anoDefi - $anoNasc); // Idade do usuário
    ?>

    <main>
        <h1>Calculando a sua idade</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="anoNasc" value="<?=$anoNasc?>">

            <label for="anoAtual">Quer saber sua idade em que anos? (atualmente estamos em <strong><?=date("Y")?></strong>)</label>
            <input type="number" name="anoDefi" id="anoDefi" value="<?=$anoDefi?>">

            <input type="submit" value="Qual será sua idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>

        <?php 
            echo "<p>Quem nasceu em $anoNasc vai ter <strong> $idade anos</strong> em $anoDefi</p>";
        ?>
    </section>
</body>
</html>