<?php
    $id = $_GET['id'];
    $sql = "delete from funcionario where id = $id";

    include_once("../conexao.php");
    $result = mysqli_query($conexao, $sql);

    if ($result)
    {
        header("location:Listar.php");
    } else {
        mysqli_error($conexao);
    }
?>