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
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top" href="index.php">Yukihira -
                Japan Food</a>
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio" href="index.php">Mostruário</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about" href="index.php">Sobre</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact" href="index.php">Contato</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="pedido.php">Cardápio</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModalP">
                            <div class="portfolio-item-caption d-flex h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#perfil"><i id="icon_perfil" class="fa fa-user"></i>Perfil</a>
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
                    <h4 id="entrar_login" class="modal-title">Entrar</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i id="x_perfil" class="fas fa-times"></i></span></button>
                </div>
                <div class="modal-body1">
                    <form action="login.php" method="POST">
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
                            <button id="botao_pedir" type="submit" class="btn btn-primary btn-block btn-1">Entrar</button>
                        </div>
                        <hr />
                    </form>
                    <div class="form-group">
                        <div class="hint-text">
                            <p style="font-size: 16px;">Não tem uma conta?</p>
                        </div>
                        <a href="cadastro.php" id="botao_pedir"><button class="btn btn-primary btn-block btn-1">Cadastre-se</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="https://ae01.alicdn.com/kf/H7c6c31a5a2b54a6aa7b9d01e2099023e0/For-Yukihira-Diner-Logo-Vinyl-Decal-Sticker-Shokugeki-no-Soma-Food-Wars-Anime-Funny-Vinyl-Decals.jpg" alt="">
            <!-- Masthead Heading-->
            <h1 class="masthead-heading mb-0">Yukihira - Nipponshoku</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="pre-wrap masthead-subheading font-weight-light mb-0">A Melhor Comida Japonesa Diretamente Do Japão
            </p>
        </div>
    </header>
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">MOSTRÚARIO</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Items-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="imagens/sushi1.jpg" alt="Sushi" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="https://i.pinimg.com/originals/fe/0f/b9/fe0fb9d949f57032b9373d37438b083e.png" alt="Sashimi" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="https://shokugekinosoumafoodwars.files.wordpress.com/2018/09/chaliapin_steak_don_prototype_anime.png" alt="Donburi" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="https://cloudedanime.files.wordpress.com/2017/01/dragon-ball-super-73-01-ramen.jpg" alt="Lámen" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="https://pm1.narvii.com/6311/2ef42ecdd2692bb857d54709306ec113d6d59572_hq.jpg" alt="Tempura" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="https://pbs.twimg.com/media/Dd1fsXuV4AAmSl3.jpg" alt="Omelete" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Modal -->
    <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal0Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Sushi</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="https://animefanatika.co.za/afwp/wp-content/uploads/2015/03/000-01-sushi.jpg" alt="Sushi" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Sushi é um prato da culinária japonesa que possui origem numa antiga técnica de conservação da carne de peixe em arroz avinagrado.</p>
                                <button class="btn btn-primary"><a id="botao_pedir" href="pedido.php">Fazer
                                        Pedido</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Sashimi</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="https://i.pinimg.com/originals/fe/0f/b9/fe0fb9d949f57032b9373d37438b083e.png" alt="Sashimi" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Sashimi é uma iguaria da culinária japonesa que consiste de peixes e frutos do mar muito frescos, fatiados em pequenos pedaços e servidos apenas com algum tipo de molho, e guarnições simples como shiso e raiz de daikon fatiada.
                                </p>
                                <button class="btn btn-primary"><a id="botao_pedir" href="pedido.php">Fazer
                                        Pedido</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Donburi</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="https://shokugekinosoumafoodwars.files.wordpress.com/2018/09/chaliapin_steak_don_prototype_anime.png" alt="Donburi" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Donburi, literalmente tigela, freqüentemente abreviado para "don", é um prato japonês de arroz na tigela, contendo peixe, carne, vegetais ou outros ingredientes parecidos juntos, servidos em cima do arroz.
                                </p>
                                <button class="btn btn-primary"><a id="botao_pedir" href="pedido.php">Fazer
                                        Pedido</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Lámen</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="https://cloudedanime.files.wordpress.com/2017/01/dragon-ball-super-73-01-ramen.jpg" alt="Lámen" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lámen, ou rāmen é um alimento japonês. Um prato de lámen normalmente é composto por um tipo de macarrão chinês, uma sopa com caldo à base de ossos de porco, peixe ou frango, e temperados com uma base tarê que da sabor ao caldo base.
                                </p>
                                <button class="btn btn-primary"><a id="botao_pedir" href="pedido.php">Fazer
                                        Pedido</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Tempura</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="https://pm1.narvii.com/6311/2ef42ecdd2692bb857d54709306ec113d6d59572_hq.jpg" alt="Tempura" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Tempura é um prato clássico da culinária portuguesa e exportada para o Japão que a popularizou. Consiste de pedaços fritos de vegetais ou mariscos envoltos num polme fino. A fritura é realizada em óleo muito quente, durante apenas cerca de dois ou três minutos.
                                </p>
                                <button class="btn btn-primary"><a id="botao_pedir" href="pedido.php">Fazer
                                        Pedido</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary mb-0">Omelete</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="https://pbs.twimg.com/media/Dd1fsXuV4AAmSl3.jpg" alt="Omelete" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">O omelete, omolete ou omeleta é um prato feito de ovos batidos com manteiga ou óleo, geralmente com outros ingredientes como queijo, presunto, legumes ou mesmo combinações destes.
                                </p>
                                <button class="btn btn-primary"><a id="botao_pedir" href="pedido.php">Fazer
                                        Pedido</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sobre -->

    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading d-inline-block text-white">SOBRE</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="pre-wrap lead">O Yukihira foi fundado em 2021 com o objetivo de mostrar a tradição culinária japonesa com refinamento, conforto e cuidado. Esta tradição não quer dizer apenas fidelidade na reprodução das receitas de pratos típicos, mas sim uma profunda compreensão da visão de mundo do povo japonês, tanto cultural, como histórica, religiosa e até mesmo espiritual.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="pre-wrap lead">Este cuidado pode ser notado na escolha de se trabalhar sempre respeitando o ritmo da natureza e compreendendo que no Japão mesmo as receitas típicas não possuem uniformidade, mas variam de acordo com a região, com os ingredientes ali encontrados que transmitem e apresentam um sabor particular de cada uma dessas regiões.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->

    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary d-inline-block mb-0">Contato</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Content-->
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3"><i class="fas fa-mobile-alt"></i></div>
                        <div class="text-muted">Phone</div>
                        <div class="lead font-weight-bold">(61) 99555-5555</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                        <div class="text-muted">Email</div><a class="lead font-weight-bold" href="mailto:yukihira@example.com">yukihira@example.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <p class="pre-wrap lead mb-0">Mande seu currículo para yukihira@example.com com o assunto quero entrar na família</p>
                </div>
                <p><a id="administracao" href="usuario/index.php">Administração</a></p>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <section class="copyright py-4 text-center text-white">
        <div class="container"><small class="pre-wrap">Copyright ©Yukihira 2020</small></div>
        <a href="usuario/login_usuario.php"></a>
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