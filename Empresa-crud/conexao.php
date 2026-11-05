<?php
    //este arquivo conecta com o db

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "empresa_crud";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $db);
    if ($conexao)
    {
        echo "Conexão realizada com sucesso";
    } else {
        echo mysqli_error($conexao);
    }
?>