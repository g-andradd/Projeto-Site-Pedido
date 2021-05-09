<?php 
include 'conexao.php';
$nome_pedido = $_POST["nome_pedido"];
$data_pedido = $_POST["data_pedido"];
$quantidade_pedido = $_POST["quantidade_pedido"];
$valor_pedido = $_POST["valor_pedido"];
$idpedido = $_POST["idpedido"];
$altera_pedido = $conexao->prepare("UPDATE `pedido` 
SET 
`nome_pedido` = :nome_pedido,
`data_pedido` = :data_pedido,
`quantidade_pedido` = :quantidade_pedido,
`valor_pedido` = :valor_pedido
 WHERE `pedido`.`idpedido` = :idpedido;");

$altera_pedido->execute(array(
    ':nome_pedido' => $nome_pedido,
    ':data_pedido' => $data_pedido,
    ':quantidade_pedido' => $quantidade_pedido,
    ':valor_pedido' => $valor_pedido,
    ':idpedido' => $idpedido
));
if($altera_pedido == TRUE){
    echo "<script> alert ('Alteração feita com sucesso!') </script>";
    echo "<script> location.href='lista_pedidos.php'</script>";
}else{
    echo "Erro ao alterar!";
}
?>