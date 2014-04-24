<?php
require "./views/header.php";
require '../config/conecta.php';


$qryMesaMax = mysql_query("select max(mes_id) as ultimaMesa from mes_mesa") or die(mysql_error());

while ($row = mysql_fetch_assoc($qryMesaMax)) {
    $mes_id = $row['ultimaMesa'];
}
?>

<script>
    function mostraMesasCadastradas() {

        document.getElementById("mesasCadastradas").style.display = "block";
    }
</script>

<div class="container">

    <form id="frmMesa" name="frmMesa" method="post" action="action.php">
        <div class="row">
            <div class="col-lg-1">
                <label>Mesa</label>
                <input type="text" class="form-control" id="mes_id" name="mes_id" value="<?php echo $mes_id + 1 ?>" disabled>
            </div><!--DIV COL-LG-1-->
            <div class="col-lg-2">
                <label>N° de Lugares</label>
                <input type="text" class="form-control" id="mes_tamanho" name="mes_tamanho">
            </div><!--DIV COL-LG-2-->
        </div><!--DIV ROW-->

        <br>

        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-2">
                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Cadastrar"><br>
            </div><!--DIV COL-LG-4-->
            <div class="col-lg-2">
                <input class="btn btn-lg btn-primary btn-block" type="reset" value="Limpar Campos"><br>
            </div><!--DIV COL-LG-4-->
            <div class="col-lg-2">
                <input class="btn btn-lg btn-primary btn-block" type="reset" value="Mesas Cadastradas" onclick="return mostraMesasCadastradas()"><br>
            </div><!--DIV COL-LG-4-->
        </div><!--DIV ROW-->

        <br>
        <input type="hidden" id="acao" name="acao" value="insertMesa">
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