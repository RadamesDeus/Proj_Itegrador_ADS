<?php
require "./views/header.php";
require '../config/conecta.php';

$qryMesa = mysql_query("select * from mes_mesa where mes_status = 'O'")or die(mysql_error());


?>
<div class="container">

    <form id="frmMesa" name="frmMesa" method="post" action="action.php">
        <div class="row">
            <div class="col-lg-12">
                <center><label><h3>Selecione mesa para fechada</h3></label></center>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            <center>
            	<?php 
				while($row = mysql_fetch_array($qryMesa)){?>
                	<?php echo "Mesa ".$row['mes_id']."  "?><input type="radio" id="mesa" name="mesa" value="<?php echo $row['mes_id']?>"><br>
                <?php }?>
                
                </center>
            </div>
        </div><!--DIV ROW-->

        <br>

        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-2">
                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Fechar Mesa"><br>
            </div><!--DIV COL-LG-4-->
            <div class="col-lg-5"></div>
        </div><!--DIV ROW-->

        <br>
        <input type="hidden" id="acao" name="acao" value="fecharMesa">
    </form>
    <form>
        <div class="row" id="mesasCadastradas" style="display: none">
            <center>
                <h2>Mesas Cadastradas</h2>
            </center>
            <div class="col-lg-5"></div>
            <div class="col-lg-1">
                <b>Mesa 01</b>
            </div>
            <div class="col-lg-2">
                <img src="../imagens/bt_editar.jpg" style="width: 30px">
            </div>



        </div>
    </form>

</div><!--DIV CONTAINER-->





<?php
require './views/footer.php';
?>