<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 02 | Gerando número aleatório</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        form input {
            background: linear-gradient(to left, #00008b, #240041);
            color: #fff;
            font-size: 1em;
            font-weight: 600;
            display: block;
            margin-top: 30px;
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form input:hover {
            background: linear-gradient(to left,rgb(0, 0, 153),rgb(47, 0, 85));
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h1>Trabalhando com números aleatórios</h1>
        </header>
        <form method="get">
            <div>
                <?php
                    if($_SERVER["REQUEST_METHOD"] == "GET") {
                        gerarNum();
                    }

                    $numAleatorio = gerarNum();

                    function gerarNum() {
                        return random_int(0, 100);
                    }

                    echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
                    echo "<p>O valor gerado foi <strong>$numAleatorio</strong></p>";
                ?>
            </div>
            <input type="submit" name="submit" id="btnSubmit" value="Gerar outro número">
        </form>
    </main>
</body>
</html>