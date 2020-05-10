<?php
	session_start();

	$mod = $_GET['mod'];
	$act = $_GET['act'];

	$class_name = ucfirst($mod) . "Controller";
	$path = __DIR__."/Controller/" . $class_name . ".php";
	if(!file_exists($path)){
		echo "File $path khong ton tai";
		exit();
	}

	require_once($path);
	$controller_obj = new $class_name();
	if(!method_exists($controller_obj, $act)){
		echo "Method $act khong ton tai";
		exit();
	}
	$controller_obj->$act();
 ?>