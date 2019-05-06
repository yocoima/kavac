<?php
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/navbar.php';
// require_once 'views/layout/estructura.php';
require_once 'views/layout/sidebar.php';


if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';
}else{
	$error = new errorController ();
	$error->index();
}

if(class_exists($nombre_controlador)){
	$controlador = new $nombre_controlador();

	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}else{
		$error = new errorController ();
		$error->index();
	}
}else{
	$error = new errorController ();
	$error->index();
}
?>
