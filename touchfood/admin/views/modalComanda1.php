<?php

require "../config/conecta.php";

$qryMesa1 = mysql_query("select * from mes_mesa where mes_id = 1")or die(mysql_error());

?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Lançamentos - Mesa 01</h4>
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
       <div class="row">
        	<div class="col-lg-4">
            	 Porção de Batata Frita
            </div>
            <div class="col-lg-1">
            	1
            </div>
            <div class="col-lg-2">
            	R$ 18,00
            </div>
            <div class="col-lg-3">
            	R$18,00
                <a href="#"><img src="../imagens/bt_excluir.jpg" style="width:15px"></a>
            	<a href="#"><img src="../imagens/bt_editar.jpg" style="width:15px"></a>
 
            </div>
        </div>
        
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
       <div class="row">
        	<div class="col-lg-4">
            	 Couvert Artístico
            </div>
            <div class="col-lg-1">
            	6
            </div>
            <div class="col-lg-2">
            	R$ 5,00
            </div>
            <div class="col-lg-3">
            	R$30,00
                <a href="#"><img src="imagens/bt_excluir.jpg" style="width:15px"></a>
            	<a href="#"><img src="imagens/bt_editar.jpg" style="width:15px"></a>
 
            </div>
        </div>
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
      			<select class="form-control">
        			
            		<option>Bebida</option>
            		<option>Alimentos</option>
            		<option>Adicionais</option>
        		</select>
            </div>
        </div>
        <br>
        <div class="row">
        	<div class="col-lg-10">
      			<select class="form-control">
        			<option>Refrigerante Kuat 350ml</option>
            		<option>Isca de Frango</option>
            		<option>Couvert Artístico</option>
        		</select>
            </div>
        	<div class="col-lg-2">
            	<input type="text" class="form-control">
            </div>
        </div>
        <br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Lançar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->