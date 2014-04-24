<?php
$qryMesa = mysql_query("select * from mes_mesa") or die(mysql_error());
?>
<form action="views/modalComanda.php" method="post">
    <div class="container">
        <div class="row">
            <?php while ($row = mysql_fetch_array($qryMesa)) { 
					if($row['mes_status'] == 'F'){
						$staus = "Fechada";
					}else{
						if($row['mes_status'] == 'A'){
							$staus = "Aberta";
						}else{
							if($row['mes_status'] == 'O'){
							$staus = "Ocupada";
						}else{
							if($row['mes_status'] == 'R'){
							$staus = "Reservada";
						}
							}
						}
					}
			?>
                <form action="views/modalComanda.php" method="post">
                <div class="col-lg-2">
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        <?php echo "Mesa" . $row['mes_id']." - ".$staus; ?>
                    </button>
                </div><!-- /.col-lg-2 -->
                </form>
            <?php } ?>
        </div><!-- DIV ROW-->
    </div> <!-- /container -->
</form>
<?php
include './views/modalComanda1.php';
?>
