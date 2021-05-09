<?php
include 'conexao.php';

$numero_endereco = NULL;
$idcliente = $_POST['idcliente'];
$nome_cliente = $_POST['nome_cliente'];
$sobrenome_cliente = $_POST['sobrenome_cliente'];
$email_cliente = $_POST['email_cliente'];
$senha_cliente = $_POST['senha_cliente'];
$cpf_cliente = $_POST['cpf_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];
$enderecoSimples_cliente = $_POST['enderecoSimples_cliente'];
$cep_cliente = $_POST['cep_cliente'];
$numero_endereco = $_POST['numero_endereco'];
$complemento_cliente = $_POST['complemento_cliente'];
$cidade_cliente = $_POST['cidade_cliente'];
$endereco_cliente = $cep_cliente . " " . $enderecoSimples_cliente . " " . $numero_endereco . " " . $complemento_cliente . $cidade_cliente;

$altera_cliente = $conexao->prepare("UPDATE `cliente` 
SET 
`nome_cliente` = :nome_cliente,
`sobrenome_cliente` = :sobrenome_cliente,
`email_cliente` = :email_cliente,
`senha_cliente` = :senha_cliente,
`cpf_cliente` = :cpf_cliente,
`telefone_cliente` = :telefone_cliente,
`endereco_cliente` = :endereco_cliente
 WHERE `cliente`.`idcliente` = :idcliente;");

$altera_cliente->execute(array(
    ':nome_cliente' => $nome_cliente,
    ':sobrenome_cliente' => $sobrenome_cliente,
    ':email_cliente' => $email_cliente,
    ':senha_cliente' => $senha_cliente,
    ':cpf_cliente' => $cpf_cliente,
    ':telefone_cliente' => $telefone_cliente,
    ':endereco_cliente' => $endereco_cliente,
    ':idcliente' => $idcliente
));
if ($altera_cliente == TRUE) {
    echo "<script> alert ('Alteração feita com sucesso!') </script>";
    echo "<script> location.href='lista_cliente.php'</script>";
} else {
    echo "Erro ao alterar!";
}
