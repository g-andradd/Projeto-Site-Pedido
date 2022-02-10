<?php
session_start();
$nome = $_SESSION['sessao_nome'];
$idcliente = $_SESSION['sessao_idcliente'];
include 'conexao.php';

$consulta_pedido = $conexao->query("SELECT * FROM `pedido` WHERE cliente_idcliente = $idcliente");

?>
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


</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="index_logado.php" href="#page-top">Yukihira -
                Japan Food</a>
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index_logado.php" href="#portfolio">Mostruário</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index_logado.php" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index_logado.php" href="#contact">Contato</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="pedido_logado.php">Cardápio</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" href="#">Carrinho</a>

                        <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with scrolling</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <p>Try scrolling the rest of the page to see this option in action.</p>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <div class="row">
                            <div class="col-md pl-4 user-dropdown">
                                <div class="dropdown btn-group">
                                    <a class="nav-link py-3 px-0 px-lg-3 rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i id="icon_perfil" class="fas fa-user"></i><?php echo $nome ?></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="minha_conta.php">Minha Conta</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="meus_pedidos.php">Meus Pedidos</a>

                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" style="text-align: center;" href="sair.php">Sair</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="layoutSidenav_content">
        <main id="margintop">
            <div class="container-fluid">
                <h1 class="mt-4">Meus Pedidos</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index_logado.php">Página Inicial</a></li>
                    <li class="breadcrumb-item active">Meus Pedidos</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Meus Pedidos
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nome do Pedido</th>
                                        <th>Data</th>
                                        <th>Quantidade</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nome do Pedido</th>
                                        <th>Data</th>
                                        <th>Quantidade</th>
                                        <th>Valor</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    while ($lista = $consulta_pedido->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <tr>
                                            <form action="alterar_pedido.php" method="POST">
                                                <td><input type="hidden" name="nome_pedido" value="<?php echo $lista["nome_pedido"] ?>"> <?php echo $lista["nome_pedido"] ?> </td>
                                                <td><input type="hidden" name="data_pedido" value="<?php echo $lista["data_pedido"] ?>"> <?php echo $lista["data_pedido"] ?> </td>
                                                <td><input type="hidden" name="quantidade_pedido" value="<?php echo $lista["quantidade_pedido"] ?>"> <?php echo $lista["quantidade_pedido"] ?> </td>
                                                <td><input type="hidden" name="valor_pedido" value="<?php echo $lista["valor_pedido"] ?>"> <?php echo $lista["valor_pedido"] ?> </td>
                                            </form>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Rodapé -->

        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">LOCALIZAÇÃO</h4>
                        <p class="pre-wrap lead mb-0">QD 39 LOJA 01 SETOR CENTRAL 72425-110 Gama, DF</p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">REDES SOCIAIS</h4><a id="botao_social" class="btn btn-outline-light rounded-circle btn-social mx-1" href="https://www.facebook.com/profile.php?id=100007155765748"><i id="social" class="fab fa-fw fa-facebook-f"></i></a><a id="botao_social" class="btn btn-outline-light rounded-circle btn-social mx-1" href="https://www.instagram.com/g_andradd"><i id="social" class="fab fa-fw fa-instagram"></i></a>

                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="mb-4">TRABALHE CONOSCO</h4>
                        <p class="pre-wrap lead mb-0">Mande seu currículo para yukihira@example.com com o assunto quero
                            entrar na família</p>
                    </div>
                    <p><a id="administracao" href="usuario/index.php">Administração</a></p>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div class="container"><small class="pre-wrap">Copyright ©Yukihira 2020</small></div>

        </section>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <style>
            #margintop {
                margin-top: 10%;
            }

            #x_perfil {
                font-size: 20px;
            }

            #entrar_login {
                margin-top: 5%;
                margin-left: 34%;
            }

            #botao_pedir {
                color: white;
            }

            #portfolioModalP {
                visibility: visible;
                opacity: 1;
                flex-direction: column;
                position: fixed;
                padding: 20px;
                max-width: 370px;
                border-radius: 8px;
                width: 100%;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }
        </style>

</body>

</html>