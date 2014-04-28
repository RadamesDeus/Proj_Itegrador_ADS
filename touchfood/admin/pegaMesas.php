<?php
$qryMesa = mysql_query("select * from mes_mesa") or die(mysql_error());
?>
    <div class="container">
        <div class="row">
        <div class="w">
        	<div class="sort" id="sort">
				<ul class="list-inline">
                	<li><a href="#" rel="tooltip" title="Ver todas" class="all selected">Todos</a></li>
                	<li><a href="#" rel="tooltip" title="Apenas Fechada" class="Fechada">Fechados</a></li>
                	<li><a href="#" rel="tooltip" title="Apenas Ocupada" class="Ocupada">Ocupados</a></li>
                	<li><a href="#" rel="tooltip" title="Apenas Reservada" class="Reservada">Resevados</a></li>
                 </ul>
            </div>
        			
        <ul class="portfolio clearfix list-inline list-unstyled">
            <?php while ($row = mysql_fetch_array($qryMesa)) { 
					  switch($row['mes_status']){
			  case "F":
			  
					  $cor = "btn-inverse";
					  $staus = "Fechada";
					   $imagem="../imagens/mesaFechada.png";
				  break;
			  case "A":
			  			  $cor = "btn-success";
						  $staus = "Aberta";
						  $imagem="../imagens/mesaLivre.png";
					  break;
			 case "O":
			  $cor = "btn-success";
						  $cor = "btn-danger";
						  $staus = "Ocupada";
						    $imagem="../imagens/mesaOcupada.png";
					  break;
			 case "R":
			  			  $cor = "btn-info";	
							$staus = "Reservada";
							  $imagem="../imagens/mesaResevada.png";
					  break;
				
				}
			?>
            
            	<li data-id="id-<?php echo $row['mes_id'] ?>" class="<?php echo $staus ?>">
                    <form action="inicio.php" method="post">
                         <button class="btn <?php echo $cor?> mesa" name="mesa" rel="tooltip" title="Ver Mesa" value="<?php echo $row['mes_id']; ?>"  > 
							<h2><?php echo $row['mes_id'].""//. $staus; ?>   </h2>                                
                            <img  src="<?php echo $imagem?>" class=""/>
                         </button>
                   		<input type="hidden" name="statusBtn" value="<?php echo $staus ?>" />
                    </form>
                </li>
             
            <?php } ?>
            </ul>
            </div><!-- DIV W-->
        </div><!-- DIV ROW-->
    </div> <!-- /container -->
    
    


<?php

if(isset($_POST['statusBtn'])){			
	switch($_POST['statusBtn']){
		 case "Ocupada":
				$id = $_POST['mesa'];
				include './views/modalComanda.php';
		 break;
		 case "Fechada":
				$id = $_POST['mesa'];
			   include './views/modalAbrirReservar.php';
		 break;
		  case "Reservada":
				$id = $_POST['mesa'];
			    echo "<script>window.location = 'frmAbreMesaReserva.php'</script>";
		 break;
		   case "sucesso":
				$id = $_POST['mesa'];
			   include './views/modalSucesso.php';
		 break;
		}
}

?>
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="../assets/plugins/filtro/js/jquery.quicksand.js"></script>
<script type="text/javascript" src="../assets/plugins/filtro/js/sorting.js"></script>


<script type="text/javascript">

$('.mesa').tooltip()
$('#myModal').modal();
$('a').tooltip();
$('button').tooltip();// JavaScript Document

</script>
