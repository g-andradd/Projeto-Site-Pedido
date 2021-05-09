<?php
    include 'conexao.php';

    $numero_endereco = NULL;
    $nome_cliente = $_POST['nome_cliente'];
    $sobrenome_cliente = $_POST['sobrenome_cliente'];
    $senha_cliente = $_POST['senha_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $cpf_cliente = $_POST['cpf_cliente'];
    $telefone_cliente = $_POST['telefone_cliente'];
    $enderecoSimples_cliente = $_POST['enderecoSimples_cliente'];
    $cep_cliente = $_POST['cep_cliente'];
    $numero_endereco = $_POST['numero_endereco'];
    $complemento_cliente = $_POST['complemento_cliente'];
    $cidade_cliente = $_POST['cidade_cliente'];
    $endereco_cliente = $cep_cliente." ". $enderecoSimples_cliente." ". $numero_endereco." " .$complemento_cliente. $cidade_cliente;

    $cadastro_cliente = $conexao->prepare("INSERT INTO `cliente`
    (`nome_cliente`, `sobrenome_cliente`, `email_cliente`, `senha_cliente`, `cpf_cliente`, `telefone_cliente`, `endereco_cliente`) 
    VALUES (
        :nome_cliente, 
        :sobrenome_cliente, 
        :email_cliente,
        :senha_cliente,
        :cpf_cliente,
        :telefone_cliente, 
        :endereco_cliente);");
    $cadastro_cliente->execute(array(
        'nome_cliente' => $nome_cliente,
        'sobrenome_cliente' => $sobrenome_cliente,
        'email_cliente' => $email_cliente,
        'senha_cliente' => $senha_cliente,
        'cpf_cliente' => $cpf_cliente,
        'telefone_cliente' => $telefone_cliente,
        'endereco_cliente' => $endereco_cliente
    ));
    session_start();
    if($cadastro_cliente == TRUE){
        echo "<script> alert('cadastro feito com sucesso!')</script>";
        echo "<script> location.href='index.php'</script>";
        //header('Location: index.php');
    }
    else{
        echo "Não foi possivel cadastrar o cliente!";
    }
