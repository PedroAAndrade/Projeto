<?php 
	session_start();
	if (!isset($_POST['login'])) {
		header("Location:login.html");	
	}

	else{
		$login = $_POST['login'];
		$password = $_POST['password'];
		$passcrip = md5($password); //criptografa a senha 

		$conn = new mysqli("localhost","root","abc123",""); //Estabelece a conexão
		if (!$conn){
			echo "erro: ".mysqli_connect_error();
			exit();
		}
		$sql = "SELECT * FROM usuarios WHERE login = \"$login\" AND password = \"$passcrip\"";

		if ($result = $conn->query($sql)) 
		{
			
				while($obj = $result->fetch_object())//varre o obj result
				{
					$_SESSION['id'] = $obj->id;
					$_SESSION['name'] = $obj->name;
					$_SESSION['email'] = $obj->email;
					$_SESSION['date'] = $obj->date;
					$_SESSION['login'] = $obj->login;
					$_SESSION['password'] = $obj->password;
					$_SESSION['logado'] = true;
					header("Location:home.php");
					exit();
				}

				if(@$_SESSION['logado']!== 1) // Se a sessão for diferente de 1 que dizer que não tá logado e e vai para erro.php
				{
					header("Location:erro.php");
					exit();
				}
		}
	}

 ?>