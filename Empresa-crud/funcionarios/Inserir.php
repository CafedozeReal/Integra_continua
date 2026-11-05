<?php
    $Nome = $_POST['nome'];
    $Email = $_POST['email'];
    $Cargo = $_POST['cargo'];
    $Salario = $_POST['salario'];
    $Admissao = $_POST['admissao'];

    $SQL = "insert into Funcionario(nome, email, cargo, salario, data_adimssao) 
    value (
            '$Nome', '$Email', '$Cargo', '$Salario', '$Admissao'
        )";

    require_once("../conexao.php");
    $Resposta = mysqli_query($conexao, $SQL);
    if ($Resposta == true)
    {
        Header("Location: Listar.php");
    }
?>