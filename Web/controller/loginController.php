<?php
	include("../model/UserDAO.php");
	include("../index.php");
	session_start();

	$obj = tryConn($_POST['nick'], $_POST['passwd']);
	/*
	* Se objeto for falso, então ocorreu algum erro na verificação de usuário.
	*/
	if($obj){
		echo "ok";
		exit();
	}else{
		echo "error";
		exit();
	}
?>