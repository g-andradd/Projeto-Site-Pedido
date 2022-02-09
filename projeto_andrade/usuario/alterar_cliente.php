<?php 
include 'conexao.php';

    $idcliente = $_POST['idcliente'];
    $nome_cliente = $_POST['nome_cliente'];
    $sobrenome_cliente = $_POST['sobrenome_cliente'];
    $email_cliente = $_POST['email_cliente'];
    $senha_cliente = $_POST['senha_cliente'];
    $cpf_cliente = $_POST['cpf_cliente'];
    $telefone_cliente = $_POST['telefone_cliente'];

    $consulta_cliente = $conexao->query("SELECT * FROM `cliente` 
    WHERE 
    idcliente = $idcliente AND 
    nome_cliente = '$nome_cliente' AND 
    sobrenome_cliente = '$sobrenome_cliente' AND
    email_cliente = '$email_cliente' AND
    senha_cliente = '$senha_cliente' AND
    cpf_cliente = '$cpf_cliente' AND
    telefone_cliente = '$telefone_cliente'
    ");
$lista = $consulta_cliente->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Alterar Produto - Yukihira</title>
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
                    <form id="cadastro" class="login100-form validate-form" action="processa_alterar_cliente.php" method="POST">
                        <span class="login100-form-title">
                            Alterar Cliente
                        </span>
                        <div class="col-form-label"> <label>Nome do Cliente:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" value="<?php echo $lista["nome_cliente"] ?>" name="nome_cliente" placeholder="Nome do Cliente">
                                </div>
                            </div>

                            <div class="col-form-label"> <label>Sobrenome do Cliente:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" value="<?php echo $lista["sobrenome_cliente"] ?>" name="sobrenome_cliente" placeholder="Sobrenome do Cliente">
                                </div>
                            </div>

                            <div class="col-form-label"> <label>E-mail do Cliente:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="email" value="<?php echo $lista["email_cliente"] ?>" name="email_cliente" placeholder="E-mail do Cliente">
                                </div>
                            </div>

                            <div class="col-form-label"> <label>Senha do cliente:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" value="<?php echo $lista["senha_cliente"] ?>" name="senha_cliente" placeholder="Senha do cliente">
                                </div>
                            </div>

                            <div class="col-form-label"> <label>CPF do cliente:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" value="<?php echo $lista["cpf_cliente"] ?>" name="cpf_cliente" placeholder="CPF do Cliente">
                                </div>
                            </div>

                            <div class="col-form-label"> <label>Telefone do cliente:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" value="<?php echo $lista["telefone_cliente"] ?>" name="telefone_cliente" placeholder="Telefone do Cliente">
                                </div>
                            </div>

                            <div class="col-form-label"> <label>CEP do cliente:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" name="cep_cliente" placeholder="CEP do Cliente">
                                </div>
                            </div>

                            <div class="col-form-label"> <label>Endereço do cliente:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" name="enderecoSimples_cliente" placeholder="Endereço do Cliente">
                                </div>
                            </div>

                            <div class="col-form-label"> <label>Número do Endereço:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" name="numero_endereco" placeholder="Número do endereço">
                                </div>
                            </div>
                            
                            <div class="col-form-label"> <label>Complemento do Endereço:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" name="complemento_cliente" placeholder="Complemento do Endereço">
                                </div>
                            </div>

                            <div class="col-form-label"> <label>Cidade do cliente:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" name="cidade_cliente" placeholder="Cidade do Cliente">
                                </div>
                            </div>

                        <div class="container-login100-form-btn">
                            <button id="botao_cadastro" name="idcliente" value="<?php echo $lista["idcliente"] ?>" class="login101-form-btn">
                                Alterar
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <a class="txt2" href="lista_cliente.php">
                                Voltar à lista de cliente
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