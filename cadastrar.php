﻿<!DOCTYPE html>

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


    <style type="text/css">

      input:not([type=submit]){
        width: 30%;            
    }
      label {
        width: 8%;
       } 
    </style>
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted"> Iptables </h3> <br>
        <h1>Cadastrar</h1> <!-- Cadastrar o usúario-->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron" style="text-align:justify">
        <form action="cadastro.php" method="post">
          <fieldset>
            <legend>Preencha seus dados:</legend>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>
            <label for="">Data nasc.:</label>
            <input type="date" name="birth" id="birth" required><br>
            <label for="login">Login:</label>
            <input type="text" name="login" id="login" required><br>
            <label for="password">Senha:</label> 
            <input type="password" name="password" id="password" required><br>
            <label for="confpass">Confirmar senha:</label>
            <input type="password" name="confpass" id="confpass" required><br>
      
  </fieldset>
  <input type="submit" value="Cadastrar">

  </form>
        
      </div>
     
   

</body></html>