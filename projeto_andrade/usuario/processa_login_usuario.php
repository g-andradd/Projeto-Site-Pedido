<?php
include 'conexao.php';

$email = $_POST['email_usuario'];
$senha = $_POST['senha_usuario'];


$consulta_usuario = $conexao->query("SELECT * FROM `usuario` WHERE `email_usuario` LIKE '$email' AND `senha_usuario` LIKE '$senha' ");

$linhas = $consulta_usuario->fetchAll();
// COUNT conta linhas do SQL
if (count($linhas) > 0) {
    $consulta_usuario = $conexao->query("SELECT * FROM `usuario`
 WHERE `email_usuario` LIKE '$email' AND `senha_usuario` LIKE '$senha' ");
    $lista = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
    $idusuario =  $lista["idusuario"];

    session_start();
    $_SESSION["sessao_idusuario"] =  $idusuario;
    $_SESSION["sessao_nome_usuario"] = $lista["nome_usuario"];
    echo "<script> alert('Login feito com sucesso!')</script>";
    echo "<script> location.href='administracao.php'</script>";
} else {
    echo "<script> alert ('Login Inválido, tente novamente')</script>";
    echo "<script> location.href='index.php'</script>";
}
