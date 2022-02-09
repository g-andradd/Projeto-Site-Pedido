<?php
include 'conexao.php';
$idproduto = $_POST["idproduto"];
$classe_produto = $_POST["classe_produto"];
$nome_produto = $_POST["nome_produto"];
$valor_produto = $_POST["valor_produto"];
$descricao_produto = $_POST["descricao_produto"];
$img_produto = $_POST["img_produto"];
$tipo_img = $_POST["tipo_img"];

$consulta_produto = $conexao->query("SELECT * FROM `produto` 
WHERE 
idproduto = $idproduto AND 
classe_produto = '$classe_produto' AND
nome_produto = '$nome_produto' AND 
valor_produto = '$valor_produto' AND 
descricao_produto = '$descricao_produto' AND
img_produto = '$img_produto' AND 
tipo_img = '$tipo_img'
");
$lista = $consulta_produto->fetch(PDO::FETCH_ASSOC);

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
                    <form id="cadastro" class="login100-form validate-form" action="processa_alterar_produto.php" method="POST">
                        <span class="login100-form-title">
                            Alterar Produto
                        </span>
                        <div class="col-form-label"> <label>Classe do Produto:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["classe_produto"] ?>" name="classe_produto" placeholder="Classe do Produto">
                                <span class="symbol-input100">
                                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-form-label"> <label>Nome do Produto:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["nome_produto"] ?>" name="nome_produto" placeholder="Nome do Produto">
                                <span class="symbol-input100">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-form-label"> <label>Valor do produto:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["valor_produto"] ?>" name="valor_produto" placeholder="Valor do Produto">
                                <span class="symbol-input100">
                                    <i class="fa fa-jpy" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-form-label"> <label>Descrição do produto:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["descricao_produto"] ?>" name="descricao_produto" placeholder="Descrição do Produto">
                                <span class="symbol-input100">
                                    <i class="fa fa-jpy" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-form-label"> <label>Nome da imagem:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["img_produto"] ?>" name="img_produto" placeholder="Nome da imagem">
                                <span class="symbol-input100">
                                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-form-label"> <label>Tipo da imagem:</label>
                            <div class="wrap-input100">
                                <input class="input100" type="text" value="<?php echo $lista["tipo_img"] ?>" name="tipo_img" placeholder="Tipo da imagem">
                                <span class="symbol-input100">
                                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <button id="botao_cadastro" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="login101-form-btn">
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