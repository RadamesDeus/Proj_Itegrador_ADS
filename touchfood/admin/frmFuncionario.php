<?php
require "./views/header.php";
require '../config/conecta.php';

$qryEstado = mysql_query("select * from est_estado")or die(mysql_error());
$qryCidade = mysql_query("select * from cidade")or die(mysql_error());
$qryFuncionarios = mysql_query("select * from func_funcionario")or die(mysql_error());

while($row = mysql_fetch_assoc($qryFuncionarios)){
	$func_id = $row['func_id'];
}


?>

<div class="container">

    <form id="frmMesa" name="frmMesa" method="post" action="action.php">
        <div class="row">
            <div class="col-lg-1">
                <label>Cod.</label>
                <input type="text" class="form-control" id="func_id" name="func_id" value="<?php echo $func_id+1?>" disabled>
            </div><!--DIV COL-LG-1-->
            <div class="col-lg-8">
                <label>Nome</label>
                <input type="text" class="form-control" id="func_nome" name="func_nome">
            </div><!--DIV COL-LG-8-->
            <div class="col-lg-3">
                <label>CPF</label>
                <input type="text" class="form-control" id="func_cpf" name="func_cpf">
            </div><!--DIV COL-LG-3-->
        </div><!--DIV ROW-->
        <div class="row">
            <div class="col-lg-6">
                <label>Endereço</label>
                <input type="text" class="form-control" id="func_endereco" name="func_endereco">
            </div><!--DIV COL-LG-6-->
            <div class="col-lg-1">
                <label>Número</label>
                <input type="text" class="form-control" id="func_numero" name="func_numero">
            </div><!--DIV COL-LG-1-->
            <div class="col-lg-5">
                <label>Bairro</label>
                <input type="text" class="form-control" id="func_bairro" name="func_bairro">
            </div><!--DIV COL-LG-5-->
        </div><!--DIV ROW-->
        <div class="row">
            <div class="col-lg-6">
                <label>Estado</label>
                <select class="form-control" id="func_estado" name="func_estado">
                	<option value="0">Selecione...</option>
                    <?php while($row = mysql_fetch_array($qryEstado)){?>
                    	<option value="<?php echo $row['est_id'];?>"><?php echo utf8_encode($row['est_nome']);?></option>
                    <?php }?>
                </select>
            </div><!--DIV COL-LG-6-->
            <div class="col-lg-6">
                <label>Cidade.</label>
                <select class="form-control" id="func_cidade" name="func_cidade">
                	<option value="0">Selecione...</option>
                    <?php while($ln = mysql_fetch_array($qryCidade)){?>
                    	<option value="<?php echo $ln['id'];?>"><?php echo utf8_encode($ln['nome']);?></option>
                    <?php }?>
                </select>
            </div><!--DIV COL-LG-6-->
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
                <input class="btn btn-lg btn-primary btn-block" type="reset" value="Func. Cadastrados"><br>
            </div><!--DIV COL-LG-4-->
        </div><!--DIV ROW-->

        <br>
        <input type="hidden" id="acao" name="acao" value="insertFuncionario">
    </form>
    <form>
        <div class="row" id="mesasCadastradas" style="display: none">
            <center>
                <h2>Funcionários Cadastrados</h2>
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