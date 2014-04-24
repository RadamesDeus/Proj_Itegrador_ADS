<?php
$qryMesa = mysql_query("select * from mes_mesa") or die(mysql_error());
?>
    <div class="container">
        <div class="row">
        <ul class="thumbnails">
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
            
            	<li>
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
		}
}

?>
<script type="text/javascript">

$('.mesa').tooltip()
$('#myModal').modal();
$('a').tooltip();
$('button').tooltip();

</script>
