<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 04</title>
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
            <h1>Conversor de Moedas v2.0</h1>
        </header>
        <section class="section2">
            <div class="res">
                <?php 
                    $dataAtual = date("m,d,Y");
                    // $dataAtual = "02,11,2025"; // Deixei para testes
                    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='$dataAtual'&\$format=json";

                    $response = file_get_contents($url);
                    $json = json_decode($response, true);

                    if (isset($json['value'][0])) {
                        $cotacao = $json['value'][0]['cotacaoVenda']; // Valor de venda
                        
                        $carteiraUser = $_GET["f_num"];
                        $taxaCambio = $cotacao;
                        $valorEmDolar = $carteiraUser / $taxaCambio;

                        echo "<p>Seus R$ $carteiraUser equivalem a US$ ".number_format($valorEmDolar,2,",",".")."</p>";
                        echo "<p><strong>*Cotação fixa de R$ ". number_format($taxaCambio,2,",",".") ."</strong> informada diretamente no código.</p>";
                    } else {
                        echo "Cotação não encontrada.";
                    }
                ?>
            </div>
            <button type="button" onclick="history.back()">Voltar</button>
        </section>
    </main>
</body>
</html>