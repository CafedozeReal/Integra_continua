<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Funcionario</title>
</head>
<body>
    <?php
        include_once("../menu.php");
    ?>

    <form action="inserir.php" method="POST">
        <label for="name">Nome: </label>
        <input type="text" name="nome" required>
        
        <label for="email">Email: </label>
        <input type="text" name="email" required>

        <label for="cargo">Cargo: </label>
        <input type="text" name="cargo" required>

        <label for="salario">Salário: </label>
        <input type="number" name="salario" required>

        <label for="admissao">Data de Entrada: </label>
        <input type="text" name="admissao" required>
        
        <button type="submit">Adicionar Funcionario</button>
    </form>
</body>
</html>