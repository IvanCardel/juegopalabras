<?php
	include ("sistema.class.php");
	if (isset($_GET["c"])) {
		$c=$_GET["c"];
	}else{
		$c="index";
	}
	$menu=$web->Crearmenu();
	$smarty->assign('menu',$menu);
	include("controllers/$c.controller.php");
?>