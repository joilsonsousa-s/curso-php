<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 03</title>
    <link rel="stylesheet" href="./style.css">
    <style>
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
            <h1>Conversor de Moedas v1.0</h1>
        </header>
        <section class="section2">
            <div class="res">
                <?php 
                    $num = $_GET["f_num"] ?? "0";
                    $carteiraUser = number_format($num, 2, ".",",");
                    $taxaCambio = 5.80;
                    $valorEmDolar = number_format(($carteiraUser / $taxaCambio), 2, ".", ",");


                    echo "<p>Seus R$ $carteiraUser equivalem a US$ $valorEmDolar</p>";
                    echo "<p><strong>*Cotação fixa de R$ 5,80</strong> informada diretamente no código.</p>";
                ?>
            </div>
            <button type="button" onclick="history.back()">Voltar</button>
        </section>
    </main>
</body>
</html>