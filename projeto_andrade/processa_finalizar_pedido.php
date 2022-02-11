<?php 
session_start();
$idcliente = $_SESSION['sessao_idcliente'];
include 'conexao.php';

date_default_timezone_set('America/Sao_Paulo');
$hora = date('H');
$minuto = date('i');
$data = date("d/m/Y");
$horario_produto = $hora.":".$minuto;
$data_pedido = $data." ".$horario_produto;
$idproduto = $_POST["idproduto"];
$nome_pedido = $_POST["nome_produto"];
$valor_produto = $_POST["valor_produto"];
$quantidade_pedido = $_POST["qtd_produto"];
$valor_pedido = $valor_produto * $quantidade_pedido;



// CADASTRO PEDIDO 
$cadastro= $conexao->prepare("INSERT INTO `pedido` (`nome_pedido`, `data_pedido`, `quantidade_pedido`, `valor_pedido`, `cliente_idcliente`) VALUES 
( :nome_pedido, :data_pedido, :quantidade_pedido, :valor_pedido, :cliente_idcliente);
");
$cadastro->execute(array(
 ':nome_pedido' => $nome_pedido,
 ':data_pedido' => $data_pedido,
 ':quantidade_pedido' => $quantidade_pedido,
 ':valor_pedido' => $valor_pedido,
 ':cliente_idcliente' => $idcliente
));


// CONSULTA O PEDIDO PARA PEGAR O ID

$consulta = $conexao->query("SELECT * FROM `pedido` WHERE `nome_pedido` LIKE '$nome_pedido' AND `data_pedido` = '$data_pedido' AND `quantidade_pedido` = '$quantidade_pedido' AND `valor_pedido` LIKE '$valor_pedido' AND `cliente_idcliente` = $idcliente");
    $lista = $consulta->fetch(PDO::FETCH_ASSOC);
    $idpedido = $lista["idpedido"];

//  CADASTRO DA TABELA ESTRANGEIRA

$cadastro_pedido_produto = $conexao->prepare("INSERT INTO `produto_has_pedido` 
(`produto_idproduto`, `pedido_idpedido`) 
VALUES (
    :idproduto,
    :idpedido
    );");
$cadastro_pedido_produto->execute(array(
    ':idproduto' => $idproduto,
    ':idpedido' => $idpedido
     ));

if($cadastro_pedido_produto == TRUE){
        echo "<script> alert('Compra feita com sucesso!')</script>";
        echo "<script> location.href='meus_pedidos.php'</script>";
    }
    else{
        echo "Não foi possivel cadastrar a tabela!";
    }
