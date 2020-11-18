<?php
session_start();
define('palabrassaltarinas', true);

require_once('C:\xampp\htdocs\palabrassaltarinas\lib\smarty\libs\Smarty.class.php');

class Sistema
{
	var $servidordb="localhost";
	var $usuariodb="root";
	var $contrasenadb="";
	var $con=null;
	var $nombredb="juego";
	var $smarty=null;
	var $mensaje="";

	function construct()
	{

	}

	//conexion a la base de datos
	public function Conectar()
	{
		$this->con = new PDO('mysql:host='.$this->servidordb.';dbname='.$this->nombredb, $this->usuariodb, $this->contrasenadb);
	}

	//funcion para consulta
	public function Query($sql)
	{
		return $this->con->query($sql);
	}

	public function Exec($sql)
	{
		return $this->con->exec($sql);
	}

	//funcion para crear variable smarty
	public function Smarty()
	{
		$smarty=new Smarty();
	}

	public function fetchAll($sql)
		{
				$stmt=$this->con->prepare($sql);
				$stmt->execute();
				$datos=$stmt->fetchAll(PDO::FETCH_ASSOC);
				return $datos;
		}

}

class Juegopalabras extends Sistema
{
	public function Crearmenu()
	{
		$this->Crearsmarty();
		$menu=$this->smarty->fetch("index.html");

	}
	public function Crearsmarty()
	{
		$this->smarty = new Smarty();
		$this->smarty->setTemplateDir('templates/');
		$this->smarty->setCompileDir('templates_c/');
		$this->smarty->setConfigDir('configs/');
		$this->smarty->setCacheDir('cache/');
	}


}


	$web=new Juegopalabras;
	$web->Conectar();
	$web->Crearsmarty();
	$smarty=$web->smarty;


?>