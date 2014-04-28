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
        <h4 class="modal-title" id="myModalLabel">Lançamentos - Mesa <?php echo $id ?></h4> N. de lugares: <strong><?php echo $totalLugaresMesa ?></strong>
      </div>
      <div class="modal-body">
      	<div class="row">
        	<div class="col-lg-12">
            	<strong>> PRODUTOS</strong>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
        	<div class="col-lg-4">
            	<b>Descrição</b>
            </div>
            <div class="col-lg-1">
            	<b>Qtd</b>
            </div>
            <div class="col-lg-2">
            	<b>Unitário</b>
            </div>
            <div class="col-lg-2">
            	<b>Total</b>
            </div>
        </div>
       <?php  
	  	$totalProdutos = 0;
			while($row = mysql_fetch_assoc($qryMesa1)){               	
         	$totalProduto = $row['valorProd'] * $row['qtd'];
		?>
        
       <div class="row">
        	<div class="col-lg-4">
            	<?php echo  $row['descricaoProd'] ?>
            </div>
            <div class="col-lg-1">
            	<?php echo 	$row['qtd'] ?>
            </div>
            <div class="col-lg-2">
            	<?php echo moeda($row['valorProd']) ?>
            </div>
            <div class="col-lg-2">
            	<?php echo moeda($totalProduto) ?>
                        	
            </div>
            <div class="col-lg-1">
            	<a href="#" rel="tooltip" title="Excluir"><img src="../imagens/bt_excluir.jpg" style="width:15px"></a>
             </div>
        </div>
        <?php } ?>
        <br><br>
        
        <div class="row">
        	<div class="col-lg-12">
            	<strong>> ADICIONAIS</strong>
            </div>
        </div>
        <br>
        <div class="row">
        	<div class="col-lg-4">
            	<b>Descrição</b>
            </div>
            <div class="col-lg-1">
            	<b>Qtd</b>
            </div>
            <div class="col-lg-2">
            	<b>Unitário</b>
            </div>
            <div class="col-lg-2">
            	<b>Total</b>
            </div>
        </div>
        
        <?php 
			$sql = "SELECT * , COUNT( grp.valorAd ) qtd
						FROM (
								SELECT co.co_id id, 
									mes.mes_id mesa, 
									func.func_nome garson, 
									ad.ad_descricao	descricaoAd, 
									ad.ad_valor	valorAd, 
									ad.ad_tipo 	tipoAd
								FROM co_comanda co
									INNER JOIN mes_mesa mes ON ( co.co_mesa = mes.mes_id ) 
									INNER JOIN func_funcionario func ON ( co.co_garcom = func.func_id ) 
									INNER JOIN ad_adcionais ad ON ( co.co_adicional = ad.ad_id ) 
								WHERE mes.mes_id =$id
									ORDER BY co.co_id
								)grp
								GROUP BY grp.descricaoAd
						  ";
				
					$qryMesa1 = mysql_query($sql)or die(mysql_error());	
					$totalAdicionais = 0;
				while($row = mysql_fetch_assoc($qryMesa1)){               	
                	$totalAdicional = $row['valorAd'] * $row['qtd']; 
		?>
        
       <div class="row">
        	<div class="col-lg-4">
            	<?php echo  $row['descricaoAd'] ?>
            </div>
            <div class="col-lg-1">
            	<?php echo $row['qtd'] ?>
            </div>
            <div class="col-lg-2">
            	<?php echo moeda($row['valorAd']) ?>
            </div>
            <div class="col-lg-2">
            	<?php echo moeda($totalAdicional) ?>
            </div>
              <div class="col-lg-1">
            	<a href="#" rel="tooltip" title="Excluir"><img src="../imagens/bt_excluir.jpg" style="width:15px"></a>
             </div>
        </div>
        
        <?php } ?>
        <br>
        
        
        <br><br>
        
        <div class="row">
        	<div class="col-lg-4">
            	<b>SubTotal</b>
            </div>
            <div class="col-lg-4">
            	<b>R$ 48,00</b>
            </div>
        </div>
        
        <div class="row">
        	<div class="col-lg-4">
            	<b>10%</b>
            </div>
            <div class="col-lg-4">
            	<b>R$ 4,80</b>
            </div>
        </div>
        
        <div class="row">
        	<div class="col-lg-4">
            	<b>Total</b>
            </div>
            <div class="col-lg-4">
            	<b>R$ 7,70</b>
            </div>
        </div>
      <div class="modal-footer">
      	<div class="row">
        	<div class="col-lg-12">
      			<select name="adicional" id="adicional" class="form-control">
        			<option value="" >Escolher Lançamentos</option>
            		<option value="A">Alimentos</option>
					<option value="B">Bebida</option>           		
            		<option value="C">Adicionais</option>
        		</select>
            </div>
        </div>
        <br>
        <div class="row">
        	<div class="col-lg-10">
                       
                <form action="action.php" method="POST">
                <select name="produto" id="produto" class="form-control">
                        <!-- <option> que é inseridas pelo javascript -->    
                </select>
             </div>     
             <div class="col-lg-2">
                <input type="text" class="form-control">
             </div>
        
        </div>
        <br>
        
          <div class="row">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                </div>
                <div class="col-lg-2">
                   
                         <button type="submit" class="btn btn-primary">Lançar</button>
                         <input type="hidden" name="mesa" value="<?php echo $id ?>" />
                         <input type="hidden" name="acao" value="insertComanda"  />
                          <input type="hidden" id="garsom" name="garsom" value="1">
                    </form>
                 </div>
                 <div class="col-lg-2">   
                    <form method="post" action="action.php">							
                       <button class=" btn btn-inverse" name="acao" value="fecharMesa" >Fechar Mesa</button>
                       <input type="hidden"  name="mesa" value="<?php echo $id ?>">					   
                    </form>
                 </div>
     	 </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
$(document).ready(function(){
    $('#adicional').change(function(){
	        $('#produto').load('produtos.php?ad='+$('#adicional').val() );
    });
});

</script>

