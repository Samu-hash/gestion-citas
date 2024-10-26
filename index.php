<?php
require './Config/conexion.php';

  if (isset($_GET['controller'])&&isset($_GET['action'])) {
		
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	}else{
		$controller='cita';
		$action='landing';
	}
	require('./Views/layout.php');	
?>