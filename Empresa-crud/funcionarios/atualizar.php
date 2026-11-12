<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email =$_POST['email'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $admissao = $_POST['admissao'];
    $ativo = 0;
    if (isset($_POST['ativo']))
    {
        $ativo = 1;
    }

    $sql = "UPDATE funcionario set 
        nome = '$nome',
        email = '$email',
        cargo = '$cargo',
        salario = $salario,
        data_adimssao = '$admissao',
        ativo = $ativo
        
        where id = '$id'";

    include_once("../conexao.php");
    $result = mysqli_query($conexao, $sql);
    if ($result == true)
    {
        header("location: Listar.php");
    } else {

        mysqli_error($conexao);
    }
    
?>