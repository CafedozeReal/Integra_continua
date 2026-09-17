<?php
    $n1 = (float) $_POST['n1'];
    $n2 = (float) $_POST['n2'];

    $Adicao = $n1 + $n2;
    $Subtracao = $n1 > $n2 ? $n1 - $n2 : $n2 - $n1;
    $Multiplicacao = $n1 * $n2;
    $Divisao;
    $Modulo;
    $Potenciacao = $n1 ** $n2;
    $Concatenacao = $n1.$n2;

    if (($n2 != 0) == true)
    {
        $Divisao = $n1 / $n2;
        $Modulo = $n1 % $n2;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritiméticas</title>
</head>
<body>
    <h1>Operações Aritiméticas</h1>
    <hr>
    <h2>Resultados</h2>

    <ul>
        <li><?php echo"$n1 + $n2 = $Adicao";?></li>
        <br>
        <li><?php echo"$n1 - $n2 = $Subtracao";?></li>
        <br>
        <li><?php echo"$n1 x $n2 = $Multiplicacao";?></li>
        <br>
        <li><?php echo $n2 != 0 ? "$n1 ÷ $n2 = $Divisao" : "<p>Não é possível dividir por 0, palhaço</p>"; ?></li>
        <br>
        <li><?php echo $n2 != 0 ? "$n1 % $n2 = $Modulo" : "<p>Não é possível dividir por 0, palhaço</p>"; ?></li>
        <br>
        <li><?php echo"$n1 <sup>$n2</sup> = $Potenciacao";?></li>
        <br>
        <li><?php echo"$n1 | $n2 = $Concatenacao";?></li>

        <a href="index.html"><p>Voltar</p></a>
    </ul>
</body>
</html>