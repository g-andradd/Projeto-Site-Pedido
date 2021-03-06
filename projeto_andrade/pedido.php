<?php
require("conexao.php");
$consulta_sushi = $conexao->query("SELECT * FROM `produto` WHERE `classe_produto` = 'Sushi'");
$consulta_sashimi = $conexao->query("SELECT * FROM `produto` WHERE `classe_produto` = 'Sashimi'");
$consulta_don = $conexao->query("SELECT * FROM `produto` WHERE `classe_produto` = 'Donburi'");
$consulta_lamen = $conexao->query("SELECT * FROM `produto` WHERE `classe_produto` = 'Lámen'");
$consulta_tempura = $conexao->query("SELECT * FROM `produto` WHERE `classe_produto` = 'Tempura'");
$consulta_omelete = $conexao->query("SELECT * FROM `produto` WHERE `classe_produto` = 'Omelete'");
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

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>

<body id="page-top" style="font-style: normal; font-family: sans-serif;">
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">
            <div>
                <a class="navbar-brand js-scroll-trigger" href="index.php">Yukihira - Japan Food</a>
            </div>
            <button id="botao_pedir" class="navbar-toggler navbar-toggler-right font-weight-bold text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">
                            <div href="#portfolio">Mostruário</div>
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">
                            <div href="#about">Sobre</div>
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">
                            <div href="#contact">Contato</div>
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">
                            <div href="#sushi">Cardápio</div>
                        </a>
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
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModalP">
                            <div class="portfolio-item-caption d-flex h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#"><i id="icon_perfil" class="fa fa-user"></i>Perfil</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Modal Perfil -->
    <div class="portfolio-modal modal fade show" id="portfolioModalP" tabindex="-1" aria-labelledby="#portfolioModalPLabel" aria-hidden="true">
        <div id="perfil" class="modal-dialog modal-login" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="entrar_login" class="modal-title"><b>Entrar</b></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i id="x_perfil" class="fas fa-times"></i></span></button>
                </div>
                <div class="modal-body1">
                    <form action="login2.php" method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input type="text" class="form-control" name="email" placeholder="E-mail" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="senha" placeholder="Senha" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <button id="botao_pedir" type="submit" class="btn btn-block btn-1">Entrar</button>
                        </div>
                        <hr />
                    </form>
                    <div class="form-group">
                        <div class="hint-text">
                            <p style="font-size: 16px;">Não tem uma conta?</p>
                        </div>
                        <a href="cadastro.php" id="botao_cadastro"><button id="botao_pedir" class="btn btn-block btn-1">Cadastre-se</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img id="img_carousel" class="d-block img-fluid" src="https://pa1.narvii.com/6534/ffa2392882c1e824b5c8f968981ac8e16a75881a_hq.gif" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img id="img_carousel" class="d-block img-fluid" src="https://i.pinimg.com/originals/09/37/1c/09371c56b41415fcb7f1b4c0a6346320.gif" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img id="img_carousel" class="d-block img-fluid" src="https://pa1.narvii.com/6822/bb929f226f2020e065fb9ec43e0d64f2b7239538_hq.gif" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row">

            <p>
            <h1 id="sushi">Sushi</h1>
            </p>

            <?php
            while ($lista = $consulta_sushi->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <?php echo '<img class="card-img-top" src="imagens/' . $lista['img_produto'] . '.' . $lista['tipo_img'] . '"/>' ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $lista["nome_produto"] ?></h4>
                            <h5>R$<?php echo number_format($lista['valor_produto'], 2, ',', '.'); ?></h5>
                            <p class="card-text"><?php echo $lista["descricao_produto"] ?></p>
                            <form action="teste.php" method="POST">
                                <input type="hidden" name="idproduto" value="<?php echo $lista["idproduto"] ?>">
                                <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                                <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>"> Qtd: <input min="1" style="width:50px;" type="number" name="qtd_produto">
                                <input type="hidden" name="descricao_produto" value="<?php echo $lista["descricao_produto"] ?>">
                                <a href="pedido.php"><button id="botao_pedir" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="btn btn-primary">Comprar</button></a>
                            </form>
                            <?php //echo '<a href="finalizar_pedido.php?acao=add&id=' . $lista['idproduto'] . '">Comprar</a>';
                            ?>
                        </div>
                    </div>
                </div>
            <?php }  ?>


            <p>
            <h1 id="sashimi">Sashimi</h1>
            </p>
            <?php
            while ($lista = $consulta_sashimi->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <?php echo '<img class="card-img-top" src="imagens/' . $lista['img_produto'] . '.' . $lista['tipo_img'] . '"/>' ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $lista["nome_produto"] ?></h4>
                            <h5>R$<?php echo number_format($lista['valor_produto'], 2, ',', '.'); ?></h5>
                            <p class="card-text"><?php echo $lista["descricao_produto"] ?></p>
                            <form action="teste.php" method="POST">
                                <input type="hidden" name="idproduto" value="<?php echo $lista["idproduto"] ?>">
                                <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                                <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>"> Qtd: <input min="1" style="width:50px;" type="number" name="qtd_produto">
                                <input type="hidden" name="descricao_produto" value="<?php echo $lista["descricao_produto"] ?>">
                                <a href="pedido.php"><button id="botao_pedir" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="btn btn-primary">Comprar</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }  ?>


            <p>
            <h1 id="donburi">Donburi</h1>
            </p>
            <?php
            while ($lista = $consulta_don->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <?php echo '<img class="card-img-top" src="imagens/' . $lista['img_produto'] . '.' . $lista['tipo_img'] . '"/>' ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $lista["nome_produto"] ?></h4>
                            <h5>R$<?php echo number_format($lista['valor_produto'], 2, ',', '.'); ?></h5>
                            <p class="card-text"><?php echo $lista["descricao_produto"] ?></p>
                            <form action="teste.php" method="POST">
                                <input type="hidden" name="idproduto" value="<?php echo $lista["idproduto"] ?>">
                                <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                                <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>"> Qtd: <input min="1" style="width:50px;" type="number" name="qtd_produto">
                                <input type="hidden" name="descricao_produto" value="<?php echo $lista["descricao_produto"] ?>">
                                <a href="pedido.php"><button id="botao_pedir" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="btn btn-primary">Comprar</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }  ?>

            <p>
            <h1 id="lamen">Lámen</h1>
            </p>
            <?php
            while ($lista = $consulta_lamen->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <?php echo '<img class="card-img-top" src="imagens/' . $lista['img_produto'] . '.' . $lista['tipo_img'] . '"/>' ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $lista["nome_produto"] ?></h4>

                            <h5>R$<?php echo number_format($lista['valor_produto'], 2, ',', '.'); ?></h5>
                            <p class="card-text"><?php echo $lista["descricao_produto"] ?></p>
                            <form action="teste.php" method="POST">
                                <input type="hidden" name="idproduto" value="<?php echo $lista["idproduto"] ?>">
                                <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                                <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>"> Qtd: <input min="1" style="width:50px;" type="number" name="qtd_produto">
                                <input type="hidden" name="descricao_produto" value="<?php echo $lista["descricao_produto"] ?>">
                                <a href="pedido.php"><button id="botao_pedir" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="btn btn-primary">Comprar</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }  ?>

            <p>
            <h1 id="tempura">Tempura</h1>
            </p>
            <?php
            while ($lista = $consulta_tempura->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <?php echo '<img class="card-img-top" src="imagens/' . $lista['img_produto'] . '.' . $lista['tipo_img'] . '"/>' ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $lista["nome_produto"] ?></h4>
                            <h5>R$<?php echo number_format($lista['valor_produto'], 2, ',', '.'); ?></h5>
                            <p class="card-text"><?php echo $lista["descricao_produto"] ?></p>
                            <form action="teste.php" method="POST">
                                <input type="hidden" name="idproduto" value="<?php echo $lista["idproduto"] ?>">
                                <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                                <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>"> Qtd: <input min="1" style="width:50px;" type="number" name="qtd_produto">
                                <input type="hidden" name="descricao_produto" value="<?php echo $lista["descricao_produto"] ?>">
                                <a href="pedido.php"><button id="botao_pedir" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="btn btn-primary">Comprar</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }  ?>

            <p>
            <h1 id="omeletes">Omeletes</h1>
            </p>
            <?php
            while ($lista = $consulta_omelete->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <?php echo '<img class="card-img-top" src="imagens/' . $lista['img_produto'] . '.' . $lista['tipo_img'] . '"/>' ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $lista["nome_produto"] ?></h4>
                            <h5>R$<?php echo number_format($lista['valor_produto'], 2, ',', '.'); ?></h5>
                            <p class="card-text"><?php echo $lista["descricao_produto"] ?></p>
                            <form action="teste.php" method="POST">
                                <input type="hidden" name="idproduto" value="<?php echo $lista["idproduto"] ?>">
                                <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                                <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>"> Qtd: <input min="1" style="width:50px;" type="number" name="qtd_produto">
                                <input type="hidden" name="descricao_produto" value="<?php echo $lista["descricao_produto"] ?>">
                                <a href="pedido.php"><button id="botao_pedir" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="btn btn-primary">Comprar</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </div>
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
                    <p class="pre-wrap lead mb-0">Mande seu currículo para yukihira@example.com com o assunto quero entrar na família</p>
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
        body {
            font-style: normal;
            font-family: sans-serif;
        }

        .modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 0 solid #dee2e6;
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
        }


        #perfil {
            border: none;
        }

        #mainNav {
            background-color: #ca0f0f;
        }

        #carrosel {
            margin-top: 8%;
            background-color: #000;
        }

        #img_carousel {
            width: 100%;
        }

        #lista_pedidos {
            margin-top: 7%;
        }

        #itens {
            margin-left: 2%;
        }

        #social {
            margin-top: 9px;
            font-size: 22px;
        }

        #botao_pedir {
            background-color: #000;
            border: none;

        }

        #botao_cadastro {
            color: white;
            text-decoration: none;
        }

        #icon_perfil {
            width: 25px;
        }

        #carrinho_compra {
            color: white;
        }

        #item_promocao {
            text-decoration: gray;
        }
    </style>
</body>

</html>