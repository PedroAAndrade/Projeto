﻿<?php 
  session_start();
  if(!isset($_SESSION['logado'])){//se ta logado
    header("Location:login.html");
  }
 ?>
<!DOCTYPE html>
<!-- saved from url=(0047)http://getbootstrap.com/examples/justified-nav/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Projeto</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/justified-nav/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./index_files/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./index_files/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      a{

      }
    </style>
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted"> Interface Gráfica para Iptables</h3> <br> <!-- Exibição dos menus-->
        <ul class="nav nav-justified">
          <li><a href="home.php" style="background:#abd3d8">Home</a></li>
          <li><a href="aplicacao.php" style="background:#abd3d8">Aplicações</a></li>
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="contato.php" style="background:#abd3d8">Contact</a></li>
          <li><a href="sair.php" style="background:#abd3d8">Sair</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron" style="text-align:justify">
        <p>Este projeto foi desenvolvido com a finalidade de facilitar o uso da ferramenta Iptables através de uma interface gráfica amigável ao usuário.</p>
        <p>O projeto faz parte do requisito para aprovação na disciplina de Desenvolvimento Web.</p>
        
      </div>

     

      <!-- Site footer -->
      <div class="footer">
        <p>Projeto DW</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

</body></html>