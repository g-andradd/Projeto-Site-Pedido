<?php 
include 'conexao.php';
$classe_produto = $_POST["classe_produto"];
$nome_produto = $_POST["nome_produto"];
$valor_produto = $_POST["valor_produto"];
$descricao_produto = $_POST["descricao_produto"];
$img_produto = $_POST["img_produto"];
$tipo_img = $_POST["tipo_img"];
$idproduto = $_POST["idproduto"];
$altera_produto = $conexao->prepare("UPDATE `produto` 
SET 
`classe_produto` = :classe_produto,
`nome_produto` = :nome_produto,
`valor_produto` = :valor_produto,
`descricao_produto` = :descricao_produto,
`img_produto` = :img_produto,
`tipo_img` = :tipo_img
 WHERE `produto`.`idproduto` = :idproduto;");

$altera_produto->execute(array(
    ':classe_produto' => $classe_produto,
    ':nome_produto' => $nome_produto,    
    ':valor_produto' => $valor_produto,
    ':descricao_produto' => $descricao_produto,
    ':img_produto' => $img_produto,
    ':tipo_img' => $tipo_img,
    ':idproduto' => $idproduto
));
if($altera_produto == TRUE){
    echo "<script> alert ('Alteração feita com sucesso!') </script>";
    echo "<script> location.href='lista_produto.php'</script>";
}else{
    echo "Erro ao alterar!";
}
?>