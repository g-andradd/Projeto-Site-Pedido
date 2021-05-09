<?php
    include 'conexao.php';

    $classe_produto = $_POST['classe_produto'];
    $nome_produto = $_POST['nome_produto'];
    $valor_produto = $_POST['valor_produto'];
    $descricao_produto = $_POST['descricao_produto'];
    $img_produto = $_POST['img_produto'];
    $tipo_img = $_POST['tipo_img'];

    $cadastro_produto = $conexao->prepare("INSERT INTO `produto`
    (`classe_produto`, `nome_produto`, `valor_produto`, `descricao_produto`, `img_produto`, `tipo_img`) 
    VALUES (
        :classe_produto,
        :nome_produto,
        :valor_produto,
        :descricao_produto,
        :img_produto,
        :tipo_img
        );");
    $cadastro_produto->execute(array(
        ':classe_produto' => $classe_produto,
        ':nome_produto' => $nome_produto,
        'valor_produto' => $valor_produto,
        ':descricao_produto' => $descricao_produto,
        ':img_produto' => $img_produto,
        ':tipo_img' => $tipo_img
    ));
    session_start();
    if($cadastro_produto == TRUE){
        header('Location: lista_produto.php');
    }
    else{
        echo "Não foi possivel cadastrar o produto!";
    }

?>