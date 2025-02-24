<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        li + li {
            margin-top: 15px;
        }

        img {
            width: 155px;
            margin: 0 15px ;
        }

        span {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $valSaque = $_GET["vSaque"] ?? 0;
        $valPadrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="vSegundos">Que valor você deseja sacar? (R$)*</label>
            <input type="number" name="vSaque" id="vSaque" value="<?=$valSaque?>" step="1">

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section id="resultado">
        <?php 
            echo "<h2>Saque de ".numfmt_format_currency($valPadrao, $valSaque, "BRL")." realizado</h2>";

            echo "<p>O caixa eletrônico vai te entregar as seguintes notas:</p>";

            echo "<ul>";
                echo "<li>
                        <img src='img/nota-100.jpg' alt='Nota de 100 reais'>
                        <span id='n1'>x0</span>
                     </li>";
                echo "<li>
                        <img src='img/nota-50.png' alt='Nota de 50 reais'>
                        <span id='n2'>x0</span>
                     </li>";
                echo "<li>
                        <img src='img/nota-10.png' alt='Nota de 10 reais'>
                        <span id='n3'>x0</span>
                     </li>";
                echo "<li>
                        <img src='img/nota-5.png' alt='Nota de 5 reais'>
                        <span id='n4'>x0</span>
                     </li>";
            echo "</ul>";
        ?>

        <script>
            let valSaque = "<?=$valSaque?>";

            let cont_100 = 0; // 100
            let cont_50 = 0; // 50
            let cont_10 = 0; // 10
            let cont_5 = 0; // 10

            for(let i=0; valSaque > i; i++) {
                if(valSaque >= 100) {
                    valSaque -= 100;
                    cont_100++
                    document.getElementById("n1").innerHTML = "x"+cont_100;
                }

                if(valSaque >= 50) {
                    valSaque -= 50;
                    cont_50++
                    document.getElementById("n2").innerHTML = "x"+cont_50;
                }

                if(valSaque >= 10) {
                    valSaque -= 10;
                    cont_10++
                    document.getElementById("n3").innerHTML = "x"+cont_10;
                }

                if(valSaque >= 5) {
                    valSaque -= 5;
                    cont_5++
                    document.getElementById("n4").innerHTML = "x"+cont_5;
                }
            }

            // Observação: Não consegui fazer aparecer o aviso quando por exemplo, o usuário digitar: 142, exibir o aviso
        </script>
    </section>
</body>
</html>