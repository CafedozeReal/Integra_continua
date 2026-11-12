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

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#modalremover<?php echo $Linha['id']; ?>">
                            Remover
                        </button>

                        <!-- Modal -->
                        <div class="modal fade"
                            id="modalremover<?php echo $Linha['id']; ?>"
                            tabindex="-1"
                            aria-hidden="true">

                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Remover Funcionário</h5>

                                        <button type="button" class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close">
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        Confirma a exclusão do registro?
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">
                                            Cancelar
                                        </button>

                                        <a href="remover.php?id=<?php echo $Linha['id']; ?>"
                                            class="btn btn-danger">
                                            Excluir
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>