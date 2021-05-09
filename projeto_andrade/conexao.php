<?php
$servidor = "localhost";
$usuario_servidor = "root";
$senha_servidor = "";

try{
    $conexao = new PDO("mysql:host=$servidor;dbname=projeto_andrade", $usuario_servidor, $senha_servidor);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
    echo "erro na Conexão" . $e->getMessage();
}

?>