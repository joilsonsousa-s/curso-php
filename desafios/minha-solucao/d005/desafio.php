<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 05</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .section2 p {
            font-size: 1em;
            margin-bottom: 30px;
        }

        .section2 ul {
            list-style-position: inside;
            padding-left: 30px;

            display: flex;
            flex-direction: column;
            gap: 5px;
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
            <h1>Analisador de Número Real</h1>
        </header>
        <section class="section2">
            <div class="res">
                <?php 
                    $num = (double) $_GET["f_num"];
                    $numReal = floor($num);
                    $numDecimal = $num - $numReal;
                    
                    echo "<p>Analisando o número <strong>$num</strong> informado pelo usuário:</p>";
                    
                    echo "
                      <ul>
                        <li>A parte inteira do número é <strong>".number_format($numReal)."</strong></li>
                        <li>A parte fracionária do número é <strong>".number_format($numDecimal, 3, ",",".")."</strong></li>
                      </ul>
                    ";
                ?>
            </div>
            <button type="button" onclick="history.back()">Voltar</button>
        </section>
    </main>
</body>
</html>