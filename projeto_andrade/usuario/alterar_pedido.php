<?php
include 'conexao.php';
$idpedido = $_POST["idpedido"];
$nome_pedido = $_POST["nome_pedido"];
$data_pedido = $_POST["data_pedido"];
$quantidade_pedido = $_POST["quantidade_pedido"];
$valor_pedido = $_POST["valor_pedido"];

$consulta_pedido = $conexao->query("SELECT * FROM `pedido` 
WHERE 
idpedido = $idpedido AND 
nome_pedido = '$nome_pedido' AND
data_pedido = '$data_pedido' AND 
quantidade_pedido = '$quantidade_pedido' AND 
valor_pedido = '$valor_pedido'
");
$lista = $consulta_pedido->fetch(PDO::FETCH_ASSOC);

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
                    <form id="cadastro" class="login100-form validate-form" action="processa_alterar_pedido.php" method="POST">
                        <span class="login100-form-title">
                            Alterar Produto
                        </span>
                        <div class="col-form-label"> <label>Nome do Pedido:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["nome_pedido"] ?>" name="nome_pedido" placeholder="Nome do Pedido">
                            </div>
                        </div>

                        <div class="col-form-label"> <label>Data do Pedido:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["data_pedido"] ?>" name="data_pedido" placeholder="Data do Pedido">
                            </div>
                        </div>

                        <div class="col-form-label"> <label>Quantidade do Pedido:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="number" value="<?php echo $lista["quantidade_pedido"] ?>" name="quantidade_pedido" placeholder="Quantidade do Pedido">
                            </div>
                        </div>

                        <div class="col-form-label"> <label>Valor do Pedido:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["valor_pedido"] ?>" name="valor_pedido" placeholder="Valor do Pedido">
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <button id="botao_cadastro" name="idpedido" value="<?php echo $lista["idpedido"] ?>" class="login101-form-btn">
                                Alterar
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <a class="txt2" href="lista_produto.php">
                                Voltar à lista de produto
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