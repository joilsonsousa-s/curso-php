<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            // Cotação copiada do Gogle
            $cotacao = 5.76;

            // Quantos R$ você tem?
            $real = $_GET["din"] ?? 0;

            // Equivalência em dólar
            $dolar = $real / $cotacao;

            // Mostar o resultado
            //echo "Seus R\$ ". number_format($real, 2, ".",",") ." equivalem a US\$ ".number_format($dolar, 2, ".",",");

            // Formatação de moedas com Internacionalização!
            // Biblioteca intl (Internalization PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" .numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>