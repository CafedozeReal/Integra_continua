<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listagem dos Funcionários</title>
</head>
<body>
    <?php
        include_once("../menu.php");
    ?>

    <h1 align="center">Listagem dos funcionários</h1>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Salário</th>
                <th>Operação</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once("../conexao.php");
                $SQL = "select * from funcionario";
                $Result = mysqli_query($conexao, $SQL);

                while ($Linha = mysqli_fetch_assoc($Result))
                { ?>

                <tr>
                    <td><?php echo $Linha['nome']; ?></td>
                    <td><?php echo $Linha['cargo']; ?></td>
                    <td><?php echo $Linha['salario']; ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $Linha['id']; ?>" class="btn btn-warning">Editar</a>
                        <button class="btn btn-danger">Remover</button>
                    </td>
                </tr>
            
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>