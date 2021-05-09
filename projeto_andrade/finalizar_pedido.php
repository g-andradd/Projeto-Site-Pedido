<?php
session_start();
$idcliente = $_SESSION['sessao_idcliente'];
include 'conexao.php';
$idproduto = $_POST["idproduto"];
$nome_produto = $_POST["nome_produto"];
$valor_produto = $_POST["valor_produto"];
$qtd_produto = $_POST["qtd_produto"];
$valor_total = $valor_produto * $qtd_produto;

$consulta_pedido = $conexao->query("SELECT * FROM `produto` WHERE `idproduto` = '$idproduto'");

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Yukihira - Nipponshoku</title>
    <link rel="shortcut icon" href="https://gtswiki.gt-beginners.net/decal/png/36/41/91/6053494320733914136_1.png" type="image/x-icon" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet">
    <!-- Fonts CSS-->
    <link rel="stylesheet" href="css/heading.css">
    <link rel="stylesheet" href="css/body.css">

    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="usuario/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="usuario/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="usuario/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="usuario/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="usuario/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="usuario/css/util.css">
    <link rel="stylesheet" type="text/css" href="usuario/css/main.css">
    <!--===============================================================================================-->

</head>

<body>
    <div class="container">
        <main>
            <div class="container-fluid">
                <div class="wrap100-login">
                    <div id="cadastro" class="login-form validate-form">
                        <span class="login100-form-title">
                            Finalizar Compra
                        </span>
                    </div>
                    <?php while ($lista = $consulta_pedido->fetch(PDO::FETCH_ASSOC)) { ?>
                    <form action="processa_finalizar_pedido.php" method="POST">
                    
                        <span class="login-form-subtitle">
                            <h3><?php echo $lista["nome_produto"] ?></h3>
                            <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                        </span>

                        <div class="wrap100-input">
                            <div class="col-xs-4">
                                <?php echo '<img id="img" alt="Avatar" class="avatar" src="imagens/' . $lista['img_produto'] . '.' . $lista['tipo_img'] . '"/>' ?>
                            </div>
                        </div>

                        <div class="col-form-label"> <label>Preço Unitário:</label>
                            <div class="col-xs-4">
                                <h4><strong>R$<?php echo $lista['valor_produto'] ?></strong></h4>
                                <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>">
                            </div>
                        </div>

                        <div class="col-form-label"> <label>Quantidade:</label>
                            <div class="wrap100-input">
                                <input id="qtd" min="1" class="input" type="number" name="qtd_produto" value="<?php echo $qtd_produto ?>" >
                            </div>
                        </div>
                        <br/>
                        
                        <div style="align-content: center;" class="container-login-form-btn">
                                <button id="botao_cadastro" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="login101-form-btn">
                                    Finalizar Compra
                                </button>
                        </div>
                        <br/>
                        <div class="text-center p-t-12">
                            <a class="txt2" href="pedido_logado.php">Cancelar Compra</a>
                        </div>
                        <br/>
                        <br/>

                    </form>
                    <?php } ?>
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
    .avatar {
        vertical-align: middle;
        width: 250px;
        height: 250px;
        border-radius: 50%;
    }

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
        margin-top: 50px;
        width: 100%;
        margin-left: 5px;
    }

    #img {
        margin-left: 38%;
    }

    #qtd {
        width: 150px;
    }
</style>
</body>

</html>