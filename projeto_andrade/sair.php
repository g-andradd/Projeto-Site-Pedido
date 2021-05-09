<?php 
    session_start();
    $_SESSION['sessao_login'] = NULL;
    $_SESSION['sessao_senha'] = NULL;
    header('Location: index.php');


?>