<?php

	#LOCAL#
	//mysql_connect('localhost','root','')or die(mysql_error());
	//mysql_select_db('touchfood')or die(mysql_error());
	
	#SERVIDOR MV2#
	mysql_connect('localhost','mv2soluc_touch','@touchfood@')or die(mysql_error());
	mysql_select_db('mv2soluc_touchfood')or die(mysql_error());

?>