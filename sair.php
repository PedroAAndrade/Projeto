<?php 
	session_start();
	unset($_SESSION['logado']);
	session_destroy();//sai da sessão
	header("Location:login.html");// vai para login
 ?>

