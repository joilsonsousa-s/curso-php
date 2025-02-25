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
        $vSegundos = $_GET["vSegundos"] ?? 0;
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="vSegundos">Qual é o total de segundos?</label>
            <input type="number" name="vSegundos" id="vSegundos" value="<?=$vSegundos?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Totalizando tudo</h2>

        <?php 
            echo "<p>Analisando o valor que você digitou, <strong> ".number_format($vSegundos, 0, ",", ".")." segundos</strong> equivalem a um total de:</p>";

            $semanas = (int) ($vSegundos / 604800);
            $dias = (int) ($vSegundos / 3600); // Não consegui resolver
            $horas = (int) (($vSegundos % 86400) / 3600);
            $minutos = (int) (($vSegundos / 60) % 60);
            $segundos = (int) ($vSegundos % 60);

            echo "<ul>";
                echo "<li>$semanas semanas</li>";
                echo "<li>$dias dias</li>";
                echo "<li>$horas horas</li>";
                echo "<li>$minutos minutos</li>";
                echo "<li>$segundos segundos</li>";
            echo "</ul>";

            echo "<ul>";
                echo "<li>$semanas semanas</li>";
                echo "<li>$dias dias</li>";
                echo "<li>$horas horas</li>";
                echo "<li>$minutos minutos</li>";
                echo "<li>$segundos segundos</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>