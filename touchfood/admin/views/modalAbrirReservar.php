<?php

require "../config/conecta.php";

function moeda($valor){
	return number_format( $valor , 2, ',', '.');
	}

$qryMesa1 = mysql_query("select * from mes_mesa where mes_id = $id")or die(mysql_error());	
	$row = mysql_fetch_assoc($qryMesa1);
	$totalLugaresMesa = $row['mes_tamanho'];
	
	
	$sql = "SELECT * , COUNT( grp.valorProd ) qtd
FROM (
		SELECT co.co_id id, 
			mes.mes_id mesa, 
			func.func_nome garson, 
			prod.prod_descricao	descricaoProd, 
			prod.prod_valor	valorProd, 
			prod.prod_tipo	tipoProd 
		
		FROM co_comanda co
			INNER JOIN mes_mesa mes ON ( co.co_mesa = mes.mes_id ) 
			INNER JOIN func_funcionario func ON ( co.co_garcom = func.func_id ) 
			INNER JOIN prod_produto prod ON ( co.co_produto = prod.prod_id ) 
			WHERE mes.mes_id =$id
			ORDER BY co.co_id
		)grp
		GROUP BY grp.descricaoProd
  ";
	$qryMesa1 = mysql_query($sql)or die(mysql_error());		

	
?>	
	

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Mesa <?php echo $id ?></h4> N. de lugares: <strong><?php echo $totalLugaresMesa ?></strong>
      </div>
      <div class="modal-body">
     
     	
				<div class="row">
				
                       <div class="col-lg-6 aliamento">
                      	
                          
                                        <form method="post" action="action.php">							
                                            <button class=" btn btn-danger" name="acao" value="abrirMesa" >
                                            	<h3>Abrir</h3> <img src="../imagens/mesaOcupada.png" >
                                             </button>
                                            <input type="hidden"  name="mesa" value="<?php echo $id ?>">					   
                                         </form>
                            </div>
                       	<div class="col-lg-6 aliamento">
                        
                              
                                    <form method="post" action="action.php">
                                     <button class="btn btn-large btn-info" name="acao" value="reservaMesa" >
                                     	<h3>Reservar</h3> <img src="../imagens/mesaResevada.png" >
                                      </button>
                                     <input type="hidden"  name="mesa" value="<?php echo $id ?>">	
                                    </form> 
                                    </li>
                    </div>
                       
				</div>
     </div>
     
      <div class="modal-footer">
      	
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
