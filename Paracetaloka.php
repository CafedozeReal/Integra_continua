<?php   // Obter Dados
    $Nome = $_POST['nome'];
    $Total = (float) $_POST['total'];
    $Idade = (int) $_POST['idade'];

    $Cartao = empty($_POST['cardF']) ? 'SIM' : 'NAO';

    // Processamento
    $Desconto_Card = 0;
    if ($Idade == 0)
    {
        $Desconto_Idade = 0;
    } else if ($Idade == 1) {
        $Desconto_Idade = 5;
    } else {
        $Desconto_Idade = 7;
    }

    if ($Cartao == 'SIM')
    {
        $Desconto_Card = 5;
    }

    $Valor_final_idade = $Total * ($Desconto_Idade/100);
    $Valor_final_card = $Total * ($Desconto_Card/100);
    $Valor_Final = $Total - $Valor_final_card - $Valor_final_idade;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Fiscal - Paracetaloka</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 35px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Courier New", Courier, monospace;
            background: #eaf2ed;
            color: #202a24;
        }

        .nota {
            width: min(570px, 100%);
            background: white;
            border-radius: 5px;
            box-shadow: 0 10px 30px rgba(35, 70, 48, 0.16);
            padding: 30px 34px;
            position: relative;
        }

        .cabecalho {
            text-align: center;
            border-bottom: 2px dashed #7e8d83;
            padding-bottom: 18px;
        }

        .logo {
            display: inline-flex;
            width: 45px;
            height: 45px;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #168447;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .cabecalho h1 {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #17683a;
            font-size: 24px;
        }

        .cabecalho p {
            margin: 5px 0 0;
            font-size: 12px;
            color: #69776e;
        }

        .tipo {
            text-align: center;
            margin: 18px 0;
            font-weight: bold;
            font-size: 14px;
            letter-spacing: 1px;
        }

        .dados {
            border-top: 1px dashed #9ba79f;
            border-bottom: 1px dashed #9ba79f;
            padding: 14px 0;
            margin-bottom: 18px;
        }

        .linha {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 5px 0;
            font-size: 14px;
        }

        .linha span:last-child {
            text-align: right;
        }

        .descontos {
            margin-top: 12px;
        }

        .total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 18px;
            padding: 15px 0;
            border-top: 2px solid #17683a;
            border-bottom: 2px solid #17683a;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: #17683a;
            font-size: 20px;
        }

        .total .valor {
            color: #b52e2e;
        }

        .rodape {
            text-align: center;
            margin-top: 20px;
            color: #68756d;
            font-size: 11px;
            line-height: 1.6;
        }

        .voltar {
            display: block;
            width: fit-content;
            margin: 22px auto 0;
            padding: 10px 18px;
            border-radius: 7px;
            background: #168447;
            color: white;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            font-weight: bold;
            transition: 0.2s;
        }

        .voltar:hover {
            background: #116b39;
        }
    </style>
</head>

<body>
    <div class="nota">
        <header class="cabecalho">
            <div class="logo">✚</div>
            <h1>Farmácia Paracetaloka</h1>
            <p>Saúde, cuidado e confiança</p>
        </header>

        <div class="tipo">
            COMPROVANTE DE VENDA
        </div>

        <section class="dados">
            <div class="linha">
                <span>Cliente:</span>
                <strong><?php echo $Nome; ?></strong>
            </div>

            <div class="linha">
                <span>Total do pedido:</span>
                <span>R$ <?php echo number_format($Total, 2, ',', '.'); ?></span>
            </div>
        </section>

        <section class="descontos">
            <div class="linha">
                <span>Desconto faixa etária:</span>
                <span>- R$ <?php echo number_format($Valor_final_idade, 2, ',', '.'); ?></span>
            </div>

            <div class="linha">
                <span>Desconto fidelidade:</span>
                <span>- R$ <?php echo number_format($Valor_final_card, 2, ',', '.'); ?></span>
            </div>
        </section>

        <div class="total">
            <span>TOTAL A PAGAR</span>
            <span class="valor">R$ <?php echo number_format($Valor_Final, 2, ',', '.'); ?></span>
        </div>

        <div class="rodape">
            Obrigado pela preferência!<br>
            Este documento é um comprovante de venda da Farmácia Paracetaloka.
        </div>

        <a class="voltar" href="indexe.html">← Voltar ao atendimento</a>
    </div>
</body>
</html>
