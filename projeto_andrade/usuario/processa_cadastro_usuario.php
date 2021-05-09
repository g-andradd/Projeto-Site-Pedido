<?php
    include 'conexao.php';

    $nome_usuario = $_POST['nome_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $cpf_usuario = $_POST['cpf_usuario'];
    $telefone_usuario = $_POST['telefone_usuario'];

    $cadastro_usuario = $conexao->prepare("INSERT INTO `usuario`
    (`nome_usuario`, `senha_usuario`, `email_usuario`, `cpf_usuario`, `telefone_usuario`) 
    VALUES (
        :nome_usuario,
        :senha_usuario, 
        :email_usuario,
        :cpf_usuario,
        :telefone_usuario
        );");
    $cadastro_usuario->execute(array(
        ':nome_usuario' => $nome_usuario,
        'senha_usuario' => $senha_usuario,
        'email_usuario' => $email_usuario,
        'cpf_usuario' => $cpf_usuario,
        'telefone_usuario' => $telefone_usuario,
    ));
    session_start();
    if($cadastro_usuario == TRUE){
        echo "<script> alert('cadastro feito com sucesso!')</script>";
        echo "<script> location.href='index.php'</script>";
    }
    else{
        echo "Não foi possivel cadastrar o cliente!";
    }