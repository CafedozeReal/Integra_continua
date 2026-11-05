<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Adicionar Funcionario</title>
</head>
<body>
    <?php
        include_once("../menu.php");
    ?>

    <form action="inserir.php" method="POST" style="display: flex; flex-direction: column">
        <label for="name">Nome: </label>
        <input type="text" name="nome" required>

        <hr>
        
        <label for="email">Email: </label>
        <input type="text" name="email" required>

        <hr>

        <label for="cargo">Cargo: </label>
        <input type="text" name="cargo" required>

        <hr>

        <label for="salario">Salário: </label>
        <input type="number" name="salario" required>

        <hr>

        <label for="admissao">Data de Entrada: </label>
        <input type="text" name="admissao" required>

        <hr>
        <br>
        
        <button type="submit">Adicionar Funcionario</button>
    </form>
</body>
</html>