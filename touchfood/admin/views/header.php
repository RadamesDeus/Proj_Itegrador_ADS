<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <title>TouchFood | By MV2 Soluções</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/navbar-static-top.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TouchFood</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><a href="inicio.php">Principal</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastro <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="./frmFuncionario.php">Funcionários</a></li>
                <li><a href="frmMesa.php?+mesacadastro+cadastromesa">Mesas</a></li>
                <li><a href="frmProdutos.php?produtos+cadastro">Produtos</a></li>
                <li><a href="frmAdicionais.php?adicionais+cadastro">Adionais</a></li>
               </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mesa <b class="caret"></b></a>
              <ul class="dropdown-menu">
                    <li><a href="./frmAbreMesa.php?abre+mesa">Abrir Mesa</a></li>
                    <li><a href="#">Associar Garçom à Mesa</a></li>
                    <li><a href="#">Reserva de Mesa</a></li>
                    <li><a href="#">Fechar Mesa</a></li>
                    <li><a href="#">Emitir Conta</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Ajuda</a></li>
            <li><a href="../index.php">Sair</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>