<?php
include 'conexao.php';
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];


$consulta_cliente = $conexao -> query("SELECT * FROM `cliente` WHERE `email_cliente` LIKE '$email' AND `senha_cliente` LIKE '$senha' ");

$linhas = $consulta_cliente->fetchAll();
// COUNT conta linhas do SQL
if (count($linhas) > 0){
 $consulta_cliente = $conexao->query("SELECT * FROM `cliente`
 WHERE `email_cliente` LIKE '$email' AND `senha_cliente` LIKE '$senha' ");
  $lista = $consulta_cliente->fetch(PDO::FETCH_ASSOC);
  $idcliente =  $lista["idcliente"];

   
    $_SESSION["sessao_idcliente"] =  $idcliente;
    $_SESSION["sessao_nome"] = $lista["nome_cliente"];
    echo "<script> alert ('Login válido') </script>";
    echo "<script> location.href='index_logado.php'</script>";
}
else {
     echo "<script> alert ('Login inválido') </script>";
     echo "<script> location.href='index.php'</script>";

}
echo "alo";
?>