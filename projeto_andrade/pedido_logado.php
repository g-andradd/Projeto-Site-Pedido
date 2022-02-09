<?php
require("conexao.php");
$consulta_sushi = $conexao->query("SELECT * FROM `produto` WHERE `classe_produto` = 'Sushi'");
$consulta_sashimi = $conexao->query("SELECT * FROM `produto` WHERE `classe_produto` = 'Sashimi'");
$consulta_don = $conexao->query("SELECT * FROM `produto` WHERE `classe_produto` = 'Donburi'");
$consulta_lamen = $conexao->query("SELECT * FROM `produto` WHERE `classe_produto` = 'Lámen'");
$consulta_tempura = $conexao->query("SELECT * FROM `produto` WHERE `classe_produto` = 'Tempura'");
$consulta_omelete = $conexao->query("SELECT * FROM `produto` WHERE `classe_produto` = 'Omelete'");

session_start();
$nome = $_SESSION['sessao_nome'];

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
                <a class="navbar-brand js-scroll-trigger" href="index_logado.php">Yukihira - Japan Food</a>
            </div>
            <button id="botao_pedir" class="navbar-toggler navbar-toggler-right font-weight-bold text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index_logado.php">
                            <div href="#portfolio">Mostruário</div>
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index_logado.php">
                            <div href="#about">Sobre</div>
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index_logado.php">
                            <div href="#contact">Contato</div>
                        </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#carrosel">Cardápio</a>
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
                                            <a class="dropdown-item" style="text-align: center;" href="sair2.php">Sair</a>
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

    <!-- Page Content -->
    <div id="carrosel" class="container">

        <div class="row">

            <div id="lista_pedidos" class="col-lg-3">

                <h1 class="my-4">Promoções da semana</h1>
                <div class="list-group">
                    <a href="#donburi" id="item_promocao" class="list-group-item">Donburi</a>
                    <a href="#tempura" id="item_promocao" class="list-group-item">Tempura</a>
                    <a href="#lamen" id="item_promocao" class="list-group-item">Lámen</a>
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <!-- Carousel -->
            <div class="col-lg-9">

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
                                        <form action="finalizar_pedido.php" method="POST">
                                        <input type="hidden" name="idproduto" value="<?php echo $lista["idproduto"] ?>">
                                        <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                                        <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>"> Qtd: <input min="1" style="width:50px;" type="number" name="qtd_produto">
                                        <input type="hidden" name="descricao_produto" value="<?php echo $lista["descricao_produto"] ?>">
                                        <a  href="pedido.php"><button id="botao_pedir" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="btn btn-primary">Comprar</button></a>
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
                                    <form action="finalizar_pedido.php" method="POST">
                                        <input type="hidden" name="idproduto" value="<?php echo $lista["idproduto"] ?>">
                                        <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                                        <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>"> Qtd: <input min="1" style="width:50px;" type="number" name="qtd_produto">
                                        <input type="hidden" name="descricao_produto" value="<?php echo $lista["descricao_produto"] ?>">
                                        <a  href="pedido.php"><button id="botao_pedir" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="btn btn-primary">Comprar</button></a>
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
                                    <form action="finalizar_pedido.php" method="POST">
                                        <input type="hidden" name="idproduto" value="<?php echo $lista["idproduto"] ?>">
                                        <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                                        <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>"> Qtd: <input min="1" style="width:50px;" type="number" name="qtd_produto">
                                        <input type="hidden" name="descricao_produto" value="<?php echo $lista["descricao_produto"] ?>">
                                        <a  href="pedido.php"><button id="botao_pedir" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="btn btn-primary">Comprar</button></a>
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
                                    <form action="finalizar_pedido.php" method="POST">
                                        <input type="hidden" name="idproduto" value="<?php echo $lista["idproduto"] ?>">
                                        <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                                        <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>"> Qtd: <input min="1" style="width:50px;" type="number" name="qtd_produto">
                                        <input type="hidden" name="descricao_produto" value="<?php echo $lista["descricao_produto"] ?>">
                                        <a  href="pedido.php"><button id="botao_pedir" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="btn btn-primary">Comprar</button></a>
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
                                    <form action="finalizar_pedido.php" method="POST">
                                        <input type="hidden" name="idproduto" value="<?php echo $lista["idproduto"] ?>">
                                        <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                                        <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>"> Qtd: <input min="1" style="width:50px;" type="number" name="qtd_produto">
                                        <input type="hidden" name="descricao_produto" value="<?php echo $lista["descricao_produto"] ?>">
                                        <a  href="pedido.php"><button id="botao_pedir" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="btn btn-primary">Comprar</button></a>
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
                                        <form action="finalizar_pedido.php" method="POST">
                                        <input type="hidden" name="idproduto" value="<?php echo $lista["idproduto"] ?>">
                                        <input type="hidden" name="nome_produto" value="<?php echo $lista["nome_produto"] ?>">
                                        <input type="hidden" name="valor_produto" value="<?php echo $lista["valor_produto"] ?>"> Qtd: <input min="1" style="width:50px;" type="number" name="qtd_produto">
                                        <input type="hidden" name="descricao_produto" value="<?php echo $lista["descricao_produto"] ?>">
                                        <a  href="pedido.php"><button id="botao_pedir" name="idproduto" value="<?php echo $lista["idproduto"] ?>" class="btn btn-primary">Comprar</button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    <?php }  ?>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


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

</body>

</html>