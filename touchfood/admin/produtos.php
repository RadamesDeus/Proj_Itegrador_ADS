<?php 
include("../config/conecta.php");

$id = $_GET['ad'];
$result = mysql_query("select * from prod_produto where prod_tipo = '". $id."'")or die(mysql_error());	

       while($row = mysql_fetch_array($result) ){
            echo "<option value='".$row['prod_id']."'>".$row['prod_descricao']."</option>";

       }


?>