<?php 
session_start();
$nome = $_SESSION['sessao_nome']  ;

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
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top" href="index_logado.php">Yukihira -
                Japan Food</a>
            <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#portfolio">Mostruário</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#about">Sobre</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#contact">Contato</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="pedido_logado.php">Cardápio</a>
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
                                        <li><hr class="dropdown-divider"></li>
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

    <!-- Cadastro -->
    <div class="body-titulo">
        <section class="form-titulo">
            <!-- Portfolio Section Heading-->
            <div class="text-center ">
                <div class="page-section-heading mb-0 d-inline-block cadastro">Alterar Conta</div>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star" id="star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="diJsfd"></div>
        </section>
    </div>
    <section id="cadastro">
        <div class="form-cadastro">
            <!-- area de campos do form -->
            <form action="processa_alterar_conta.php" method="POST">
                <div class="cAkJlc">
                    <div class="itens">
                        <div class="col-form-label-lg config"> <label>Primeiro Nome*:</label> 
                        <input type="text" class="form-check-inline config2" value="<?php echo $lista["nome_cliente"] ?>" name="nome_cliente" placeholder="Nome" required>
                        </div>
                    </div>

                    <div class="itens">
                        <div class="col-form-label-lg config"> <label>Sobrenome*:</label> 
                        <input type="text" class="form-check-inline config2" value="<?php echo $lista["sobrenome_cliente"] ?>" name="sobrenome_cliente" placeholder="Sobrenome" required>
                        </div>
                    </div>
                    <div class="itens">
                        <div class="col-form-label-lg config"> <label>E-mail*:</label> 
                        <input type="email" class="form-check-inline config2" value="<?php echo $lista["email_cliente"] ?>" name="email_cliente" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="itens">
                        <div class="col-form-label-lg config"> <label>Confirmar E-mail*:</label> 
                        <input type="email" class="form-check-inline config2" value="<?php echo $lista["email_cliente"] ?>" name="confirmar_email" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="itens">
                        <div class="col-form-label-lg config"> <label>Senha*:</label> 
                        <input type="password" class="form-check-inline config2" value="<?php echo $lista["senha_cliente"] ?>" name="senha_cliente" placeholder="Senha" required>
                        </div>
                    </div>

                    <div class="itens">
                        <div class="col-form-label-lg config"> <label>CPF*:</label> 
                        <input type="text" class="form-inline config2" value="<?php echo $lista["cpf_cliente"] ?>" name="cpf_cliente" placeholder="CPF" required>
                        </div>
                    </div>

                    <div class="itens">
                        <div class="col-form-label-lg config"> <label>Telefone*:</label> 
                        <input type="text" class="form-inline config2" value="<?php echo $lista["telefone_cliente"] ?>" name="telefone_cliente" placeholder="Telefone" required>
                        </div>
                    </div>

                    <div class="itens">
                        <div class="col-form-lg config"><label>CEP*:</label></div>
                        <input class="config2" name="cep_cliente" type="text" placeholder="CEP" required>
                    </div>

                    <div class="itens">
                        <div class="col-form-lg config"><label>Endereço*:</label></div>
                        <input class="config2" name="enderecoSimples_cliente" type="text" placeholder="Endereço" required>
                    </div>

                    <div class="itens">
                        <div class="col-form-lg config"><label>Número*:</label></div>
                        <input class="config2" name="numero_endereco" type="text" placeholder="Número" value>
                    </div>

                    <div class="itens">
                        <div class="col-form-label-lg config"> <label>Complemento:</label> 
                        <input type="text" class="form-inline config2" name="complemento_cliente" placeholder="Complemento" required>
                        </div>
                    </div>
                    
                    <div class="itens">
                        <div class="col-form-label-lg config"><label>Cidade*:</label>
                        <input type="text" class="form-inline config2" name="cidade_cliente" placeholder="Cidade" required>
                        </div>
                    </div>
                </div>
                <div id="actions" class="row">
                    <div class="fEWkPE">
                        <div class="khwWBn">
                            <span>
                                <button class="begBLG" name="idcliente" value="<?php echo $lista["idcliente"] ?>" type="submit">Alterar</button><a id="botao_cadastro" href="minha_conta.php" class="btn btn-default">Cancelar</a>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
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
        #star {
            color: black;
        }

        .body-titulo {
            margin-top: 130px;
            width: 100%;
            height: auto;
            float: left;
            position: relative;
            padding: 4px 5px 5px;
            padding-top: 4px;
            padding-right: 5px;
            padding-bottom: 5px;
            padding-left: 5px;
            display: flex;
            flex-direction: column;
        }

        .form-titulo {
            width: 100%;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            text-align: center;
        }

        .cadastro {
            font-family: "Roboto Condensed", sans-serif;
            font-size: 4em;
            margin-top: 10px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            align-self: center;
            text-align: center;
        }

        .mensage-error {
            text-align: center;
            margin: 10px auto;
            font-size: 1em;
            color: rgb(189, 19, 42);
            max-width: 310px;
            font-weight: 600;
        }

        #cadastro {
            margin-top: 120px;
            width: 100%;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            text-align: left;
            display: grid;
            overflow: hidden;
            overflow-x: hidden;
            overflow-y: hidden;
            gap: 0px 8px;
            row-gap: 0px;
            column-gap: 8px;
        }

        .form-cadastro {
            margin-left: 100px;
            margin-right: 100px;
            margin-bottom: 30px;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
        }

        .diJsfd {
            font-family: "Roboto Condensed", sans-serif;
            text-align: center;
            margin-bottom: 2em;
        }

        .config {
            display: block;
            margin-bottom: 10px;
            font-size: 0.8em;
            color: rgb(134, 130, 130);
            opacity: 1;
            font-weight: 600;
            text-transform: uppercase;
            font-family: "Roboto Condensed", sans-serif;
            position: relative;
        }

        .config2 {
            width: 100%;
            margin: 0px;
            padding: 0px 10px;
            height: 44.8px;
            border: 1px solid rgb(117, 112, 106);
            background-color: rgb(246, 242, 233);
            color: rgb(117, 112, 106);
            font-family: "Roboto Condensed", sans-serif;
            font-size: 16px !important;
        }

        #botao_cadastro {
            width: 150px;
        }

        form {
            font-family: "Roboto Condensed", sans-serif;
        }

        input {
            overflow: visible;
        }
    </style>

</body>

</html>