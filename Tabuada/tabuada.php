<?php
    $Tam = 0;
    $Calc = 1;
    $Receive = (float) $_POST['n1'];
    $Res = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada completa</title>

<style>
    .arco-iris {
        font-size: 6rem;
        animation: arcoIris 3s infinite;
    }

    @keyframes arcoIris {
        0%   { color: red; font-size: 6rem;}
        16%  { color: orange; font-size: 4rem; }
        33%  { color: yellow; font-size: 3rem; }
        50%  { color: green; font-size: 2rem; }
        66%  { color: blue; font-size: 3rem; }
        83%  { color: indigo; font-size: 4rem; }
        100% { color: violet; font-size: 6rem; }
    }
</style>
</head>
<body style="display: flex; flex-direction: column; height: 100vh; align-items: center; justify-content: center;">
    <div style="display: flex; height: 120px; align-items: center;">
        <h1 class="arco-iris">Resposta</h1>
    </div>

    <a href="Index.html">Voltar</a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Valor inicial</th>
                <td>Valor calculado</td>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($Tam < 10)
                {
                    $Res = $Receive * $Calc;
                    echo "<tr>";
                    echo "<td>$Receive</td>";
                    echo "<td>$Receive X $Calc = $Res</td>";
                    echo "</tr>";
                    $Calc += 1;
                    $Tam += 1;
                }
            ?>
        </tbody>
    </table>
</body>
</html>