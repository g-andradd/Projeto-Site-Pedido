<?php 
include 'conexao.php';
$idusuario = $_POST["idusuario"];
$nome_usuario = $_POST["nome_usuario"];
$senha_usuario = $_POST["senha_usuario"];
$email_usuario = $_POST["email_usuario"];
$cpf_usuario = $_POST["cpf_usuario"];
$telefone_usuario = $_POST["telefone_usuario"];

$consulta_usuario = $conexao->query("SELECT * FROM `usuario` 
WHERE 
idusuario = $idusuario AND 
nome_usuario = '$nome_usuario' AND 
senha_usuario = '$senha_usuario' AND 
email_usuario = '$email_usuario' AND 
cpf_usuario = '$cpf_usuario' AND 
telefone_usuario = '$telefone_usuario'
");
$lista = $consulta_usuario->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Alterar Funcionário - Yukihira</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="https://gtswiki.gt-beginners.net/decal/png/36/41/91/6053494320733914136_1.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/less/icons.less">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

</head>

<body>
    <div class="container">
        <main>
            <div class="container-fluid">
                <div class="wrap-login100">
                    <form id="cadastro" class="login100-form validate-form" action="processa_alterar_usuario.php" method="POST">
                        <span class="login100-form-title">
                            Alterar Funcionário
                        </span>
                        <div class="col-form-label"> <label>Nome Usuário:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["nome_usuario"] ?>" name="nome_usuario" placeholder="Nome do Usuário">
                                <span class="symbol-input100">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-form-label"> <label>Senha Usuário:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["senha_usuario"] ?>" name="senha_usuario" placeholder="Senha do Usuário">
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-form-label"> <label>E-mail Usuário:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["email_usuario"] ?>" name="email_usuario" placeholder="E-mail do Usuário">
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-form-label"> <label>CPF Usuário:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["cpf_usuario"] ?>" name="cpf_usuario" placeholder="CPF do Usuário">
                                <span class="symbol-input100">
                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-form-label"> <label>Telefone Usuário:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["telefone_usuario"] ?>" name="telefone_usuario" placeholder="Telefone do Usuário">
                                <span class="symbol-input100">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <button id="botao_cadastro" name="idusuario" value="<?php echo $lista["idusuario"] ?>" class="login101-form-btn">
                                Alterar
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <a class="txt2" href="lista_usuario.php">
                                Voltar à lista de Funcionários
                            </a>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>
</div>

</div>

<style>
    .login101-form-btn {
        font-family: Montserrat-Bold;
        font-size: 15px;
        line-height: 1.5;
        color: #fff;
        text-transform: uppercase;
        width: 100%;
        height: 50px;
        border-radius: 25px;
        background: #000000;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 25px;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    #botao_cadastro {
        background: black;
    }

    #cadastro {
        margin-top: -85px;
        width: 100%;
        width: 900px;
        margin-left: 5px;
    }
</style>
</body>

</html>