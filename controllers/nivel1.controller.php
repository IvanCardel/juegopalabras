<?php

	if (isset($_GET['action'])) {
		$action=$_GET['action'];
		$id=1;
	}
	
	$id=mt_rand(1,26);
	//$id=2;
	$datos=array();
	foreach($web->con->Query("SELECT * from imagenes where id=$id") as $fila) {
		array_push($datos, $fila);
	}
	$smarty->assign('datos',$datos);
	$smarty->display("nivel1.html");

?>