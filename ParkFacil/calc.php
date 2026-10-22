<?php
    $Horas = $_POST['horas'];
    $Veiculo = $_POST['veiculo'];
    $Lavagem = isset($_POST['lavagem']) ? "sim" : "nao";

    if ($Veiculo == "v1")
    {
        $Primeira = 10;
        $Adicional = 6;
    } else if ($Veiculo == "v2") {
        $Primeira = 6;
        $Adicional = 3;
    } else {
        die("Veículo inválido.");
    }

    $Total = $Primeira;

    for ($H = 1; $H < $Horas; $H++)
    {
        $Total = $Total + $Adicional;
    }

    if ($Total > 50)
    {
        $Total = 50;
    }

    if ($Lavagem == "sim")
    {
        $Total += 20;
    }

    echo "<p>Total a pagar: R$". $Total . "</P>";

    echo "<a href='index.html'>Voltar</a>";
?>