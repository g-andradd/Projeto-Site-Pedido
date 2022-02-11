<?php
session_start();
$idusuario = $_SESSION["sessao_idusuario"]; 
$nome_usuario = $_SESSION["sessao_nome_usuario"];

include 'conexao.php';

$consulta_cliente = $conexao->query("SELECT * FROM `cliente`");


?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Lista de Clientes - Yukihira</title>

    <link rel="icon" type="image/png" href="https://gtswiki.gt-beginners.net/decal/png/36/41/91/6053494320733914136_1.png" />

    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
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
                    <div class="small">Entrou na:</div>
                    Lista de Clientes
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Lista de Clientes</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="administracao.php">Página Inicial</a></li>
                        <li class="breadcrumb-item active">Lista de Clientes</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Lista de Cliente
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Sobrenome</th>
                                            <th>Senha</th>
                                            <th>E-mail</th>
                                            <th>CPF</th>
                                            <th>Telefone</th>
                                            <th>Endereço</th>
                                            <th>Alterar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Sobrenome</th>
                                            <th>Senha</th>
                                            <th>E-mail</th>
                                            <th>CPF</th>
                                            <th>Telefone</th>
                                            <th>Endereço</th>
                                            <th>Alterar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        while ($lista = $consulta_cliente->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <tr>
                                                <form action="alterar_cliente.php" method="POST">
                                                    <td><input type="hidden" name="nome_cliente" value="<?php echo $lista["nome_cliente"] ?>"> <?php echo $lista["nome_cliente"] ?> </td>
                                                    <td><input type="hidden" name="sobrenome_cliente" value="<?php echo $lista["sobrenome_cliente"] ?>"> <?php echo $lista["sobrenome_cliente"] ?> </td>
                                                    <td><input type="hidden" name="senha_cliente" value="<?php echo $lista["senha_cliente"] ?>"> <?php echo $lista["senha_cliente"] ?> </td>
                                                    <td><input type="hidden" name="email_cliente" value="<?php echo $lista["email_cliente"] ?>"> <?php echo $lista["email_cliente"] ?> </td>
                                                    <td><input type="hidden" name="cpf_cliente" value="<?php echo $lista["cpf_cliente"] ?>"> <?php echo $lista["cpf_cliente"] ?> </td>
                                                    <td><input type="hidden" name="telefone_cliente" value="<?php echo $lista["telefone_cliente"] ?>"> <?php echo $lista["telefone_cliente"] ?> </td>
                                                    <td><input type="hidden" name="endereco_cliente" value="<?php echo $lista["endereco_cliente"] ?>"> <?php echo $lista["endereco_cliente"] ?> </td>
                                                    <td><button id="botao_pedir" name="idcliente" value="<?php echo $lista["idcliente"] ?>" class="btn btn-primary">Alterar Cliente</button></td>
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
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>