<?php
session_start();
$idusuario = $_SESSION["sessao_idusuario"]; 
$nome_usuario = $_SESSION["sessao_nome_usuario"]; 

?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cadastro de Produtos - Yukihira</title>
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

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="administracao.php">Yukihira Administração</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="../index.php">Site Yukihira</a>
                    </li>
                </ul>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?php echo $nome_usuario ?></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="sair.php">Sair</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="administracao.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Página Inicial
                        </a>

                        <a class="nav-link" href="lista_pedidos.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Lista de Pedidos
                        </a>

                        <a class="nav-link" href="lista_produto.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Lista de Produto
                        </a>

                        <a class="nav-link" href="lista_cliente.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Lista de Clientes
                        </a>

                        <a class="nav-link" href="lista_usuario.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Lista de Funcionários
                        </a>

                        <a class="nav-link" href="cadastro_produto.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-share-square"></i></div>
                            Cadastro de Produtos
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">entrou no:</div>
                    Cadastro de Produtos
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="administracao.php">Página Inicial</a></li>
                        <li class="breadcrumb-item active">Cadastro de Produtos</li>
                    </ol>
                    <div class="wrap-login100">

                        <form id="cadastro" class="login100-form validate-form" action="processa_cadastro_produto.php" method="POST">
                            <span class="login100-form-title">
                                Cadastro dos Produtos
                            </span>

                            <div class="col-form-label"> <label>Classe do Produto:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" name="classe_produto" placeholder="Classe do Produto" required>
                                </div>
                            </div>

                            <div class="col-form-label"> <label>Nome do Produto:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" name="nome_produto" placeholder="Nome do Produto" required>
                                </div>
                            </div>

                            <div class="col-form-label"> <label>Valor do produto:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" name="valor_produto" placeholder="Valor do Produto" required>
                                </div>
                            </div>

                            <div class="col-form-label"> <label>Descrição do produto:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" data-ls-module="charCounter" maxlength="200" name="descricao_produto" placeholder="Descrição do Produto" required>
                                </div>
                            </div>

                            <div class="col-form-label"> <label>Nome da imagem:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" name="img_produto" placeholder="Nome da imagem" required>
                                </div>
                            </div>

                            <div class="col-form-label"> <label>Tipo da imagem:</label>
                                <div class="wrap-input100">
                                    <input class="input100" type="text" name="tipo_img" placeholder="Tipo da imagem" required>
                                </div>
                            </div>

                            <div class="container-login100-form-btn">
                                <button id="botao_cadastrar" class="login101-form-btn">
                                    Cadastrar
                                </button>
                            </div>

                            <div class="text-center p-t-12">
                                <a class="txt2" href="administracao.php">
                                    Voltar à página inicial
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Yukihira 2020</div>
                        </div>
                    </div>
                </footer>
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