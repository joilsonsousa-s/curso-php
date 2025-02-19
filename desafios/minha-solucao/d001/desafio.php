<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 01</title>
    <link rel="stylesheet" href="style.css">
    <style>
        main {
            width: 350px;
        }

        .section2 p {
            font-size: 1em;
        }

        .section2 p + p {
            margin-top: 10px;
        }

        .section2 .res {
            margin-bottom: 30px;
        }

        .section2 button {
            background: linear-gradient(to left, #00008b, #240041);
            color: white;
            font-size: 1em;
            font-weight: 600;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .section2 button:hover {
            background: linear-gradient(to left,#000099,#2f0055);
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h1>Resultado Final</h1>
        </header>
        <section class="section2">
            <div class="res">
                <?php 
                    $num = $_GET["f_num"] ?? "0";
                    $numAnt = $num - 1;
                    $numSuc = $num + 1;

                    echo "<p>O número escolhido foi <strong>$num</strong></p>";
                    echo "<p>O seu antecessor é $numAnt</p>";
                    echo "<p>O seu sucessor é $numSuc</p>";
                ?>
            </div>
            <button type="button" onclick="history.back()"><- Voltar</button>
        </section>
    </main>
</body>
</html>