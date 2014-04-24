<?php
require "./views/header.php";
require '../config/conecta.php';

$qryAdcionalMax = mysql_query("select max(ad_id) as ultimoadicional from ad_adcionais") or die(mysql_error());

while ($row = mysql_fetch_assoc($qryAdcionalMax)) {
    $ad_id = $row['ultimoadcionais'];
}
?>

<div class="container">

    <form id="frmProdutos" name="frmProdutos" method="post" action="action.php">
        <div class="row">
            <div class="col-lg-1">
                <label>Cod.</label>
                <input type="text" class="form-control" id="ad_id" name="ad_id" value="<?php echo $ad_id + 1 ?>" disabled>
            </div><!--DIV COL-LG-1-->
            <div class="col-lg-11">
                <label>Descrição</label>
                <input type="text" class="form-control" id="ad_descricao" name="ad_descricao">
            </div><!--DIV COL-LG-9-->
        </div><!--DIV ROW-->
        <div class="row">
            <div class="col-lg-3">
                <label>Tipo</label>
                <select class="form-control" id="ad_tipo" name="ad_tipo">
                	<option value="0">Selecione...</option>
                    <option value="C">Custo</option>
                    <option value="B">Benefício</option>
                </select>
            </div><!--DIV COL-LG-1-->
            <div class="col-lg-2">
                <label>Valor (R$)</label>
                <input type="text" class="form-control" id="ad_valor" name="ad_valor">
            </div><!--DIV COL-LG-9-->
        </div><!--DIV ROW-->

        <br>

        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-2">
                <!--<input class="btn btn-lg btn-primary btn-block" type="reset" value="Mesas Cadastradas" onclick="return mostraMesasCadastradas()"><br>-->
            </div><!--DIV COL-LG-4-->
            <div class="col-lg-2">
                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Cadastrar"><br>
            </div><!--DIV COL-LG-4-->
            <div class="col-lg-2">
                <input class="btn btn-lg btn-primary btn-block" type="reset" value="Limpar Campos"><br>
            </div><!--DIV COL-LG-4-->
        </div><!--DIV ROW-->

        <br>
        <input type="hidden" id="acao" name="acao" value="insertAdcional">
    </form>
    <form>
        <div class="row" id="mesasCadastradas" style="display: none">
            <center>
                <h2>Produtos Cadastrados</h2>
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