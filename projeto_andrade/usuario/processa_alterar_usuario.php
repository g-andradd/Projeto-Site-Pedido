<?php 
include 'conexao.php';
$nome_usuario = $_POST["nome_usuario"];
$senha_usuario = $_POST["senha_usuario"];
$email_usuario = $_POST["email_usuario"];
$cpf_usuario = $_POST["cpf_usuario"];
$telefone_usuario = $_POST["telefone_usuario"];
$idusuario = $_POST["idusuario"];

$altera_usuario = $conexao->prepare("UPDATE `usuario` 
SET 
`nome_usuario` = :nome_usuario,
`senha_usuario` = :senha_usuario,
`email_usuario` = :email_usuario,
`cpf_usuario` = :cpf_usuario,
`telefone_usuario` = :telefone_usuario
 WHERE `usuario`.`idusuario` = :idusuario;");

$altera_usuario->execute(array(
    ':nome_usuario' => $nome_usuario,    
    ':senha_usuario' => $senha_usuario,
    ':email_usuario' => $email_usuario,
    ':cpf_usuario' => $cpf_usuario,
    ':telefone_usuario' => $telefone_usuario,
    ':idusuario' => $idusuario
));
if($altera_usuario == TRUE){
    echo "<script> alert ('Alteração feita com sucesso!') </script>";
    echo "<script> location.href='lista_usuario.php'</script>";
}else{
    echo "Erro ao alterar!";
}
?>