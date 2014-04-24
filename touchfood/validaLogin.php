<?php

require "config/conecta.php";

$usuario = $_REQUEST['usuario'];
$senha = $_REQUEST['senha'];
$senhaCrypt = md5($senha);

if(isset($usuario) and isset($senha)){
	$qryLogin = mysql_query("select * from log_login where log_usuario = '$usuario' and log_senha = '$senhaCrypt'")or die(mysql_error());
	
	if(mysql_num_rows($qryLogin) == 0){?>
		<script>alert("Verifique os dados digitados.")</script>
        <script>history.go(-1)</script>	
<?php  }else{?>
		<script>window.location = "admin/inicio.php"</script>
	
	<?php }
		
}

?>