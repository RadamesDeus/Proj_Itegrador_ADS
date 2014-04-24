<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>TouchFood | By MV2 Soluções</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
        <link href="../css/navbar-fixed-top.css" rel="stylesheet">
        
    <!-- Plugin -->
  	<link rel="stylesheet" href="../assets/plugins/filtro/css/sorting.css" />    
   

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    
      <style type="text/css">
.aliamento{

text-align:center;



}
  
.thumbnails {
  margin-left: -20px;
  list-style: none;
  *zoom: 1;
}

.thumbnails:before,
.thumbnails:after {
  display: table;
  line-height: 0;
  content: "";
}

.thumbnails:after {
  clear: both;
}

.row-fluid .thumbnails {
  margin-left: 0;
}

.thumbnails > li {
  float: left;
  margin-bottom: 20px;
  margin-left: 20px;
}

.thumbnail {
  display: block;
  padding: 4px;
  line-height: 20px;
  border: 1px solid #ddd;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
     -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
  -webkit-transition: all 0.2s ease-in-out;
     -moz-transition: all 0.2s ease-in-out;
       -o-transition: all 0.2s ease-in-out;
          transition: all 0.2s ease-in-out;
}

a.thumbnail:hover,
a.thumbnail:focus {
  border-color: #0088cc;
  -webkit-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
     -moz-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
          box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
}

.thumbnail > img {
  display: block;
  max-width: 100%;
  margin-right: auto;
  margin-left: auto;
}

.thumbnail .caption {
  padding: 9px;
  color: #555555;
}

  </style>
  </head>

  <body>


    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
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
                    <li><a href="./frmReservaMesa.php">Reserva de Mesa</a></li>
                    <li><a href="frmFechaMesa.php">Fechar Mesa</a></li>
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery-1.8.2.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/bootstrap-button.js"></script>
    
  </body>
</html>
