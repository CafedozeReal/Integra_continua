<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar Funcionário</title>
</head>
<body>
    <?php
        include_once("../menu.php");

        //Obtre o Id
        $id = $_GET['id'];

        //Executar Select
        $SQL = "select * from funcionario where id = $id";
        require_once("../conexao.php");
        $Result = mysqli_query($conexao, $SQL);
        $Funcionario = mysqli_fetch_assoc($Result);
    ?>

    <h1>Editar Funcionário '<?php ?>'</h1>

    <form action="atualizar.php" method="POST" style="display: flex; flex-direction: column">
        <label for="name">Nome: </label>
        <input type="text" name="nome" required value="<?php echo $Funcionario['nome']?>">

        <hr>
        
        <label for="email">Email: </label>
        <input type="text" name="email" required value="<?php echo $Funcionario['email']?>">

        <hr>

        <label for="cargo">Cargo: </label>
        <input type="text" name="cargo" required value="<?php echo $Funcionario['cargo']?>">

        <hr>

        <label for="salario">Salário: </label>
        <input type="number" name="salario" required value="<?php echo $Funcionario['salario']?>">

        <hr>

        <label for="admissao">Data de Entrada: </label>
        <input type="text" name="admissao" required value="<?php echo $Funcionario['data_adimssao']?>">

        <hr>

        <label for="ativo">Ativo:</label>
        <input type="checkbox" name="ativo" <?php if($Funcionario['ativo'] == 1){echo 'checked';} ?>>

        <hr>
        <br>

        <input type="hidden" name="id" value="<?php echo $id ?>">
        
        <button type="submit">Adicionar Funcionario</button>
    </form>
</body>
</html>