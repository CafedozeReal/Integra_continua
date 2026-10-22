<?php
    //este arquivo conecta com o db

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "empresa-crud"

    $result = mysqli_connect($servidor, $usuario, $senha, $db);
    if ($result)
    {
        echo "Conexão realizada com sucesso";
    } else {
        echo mysqli_error($result);
    }
?>