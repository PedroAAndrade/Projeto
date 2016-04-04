<?php 
  session_start();
  if(!isset($_SESSION['logado'])){
    header("Location:login.html");
  }
 ?>

<!DOCTYPE html>
<!-- saved from url=(0047)http://getbootstrap.com/examples/justified-nav/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
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

    <script>
    function showPrompt(str)
          {
          var xmlhttp;
          if (str=="")
            {
            document.getElementById("ajax").innerHTML="";
            return;
            }
          if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            }
          else
            {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
          xmlhttp.onreadystatechange=function()
            {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
              {
              document.getElementById("ajax").innerHTML=xmlhttp.responseText;
              }
            }
          xmlhttp.open("GET","ping.php?q="+str,true);
          xmlhttp.send();
          }
    </script>
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted"> Interface Gráfica para Iptables</h3><br>
        <ul class="nav nav-justified">
          <li><a href="home.php" style="background:#abd3d8">Home</a></li>
          <li class="active"><a href="aplicacao.php">Aplicações</a></li>
          <li><a href="info.php" style="background:#abd3d8">Info</a></li>
          <li><a href="contato.php" style="background:#abd3d8">Contact</a></li>
          <li><a href="sair.php" style="background:#abd3d8">Sair</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <form>
          <h3>Verifique se há conexão com o Endereço desejado</h3>
          <!-- <input type="text" class="lead" name ="ping" placeholder="Digite aqui o Endereço" id="ping" onblur="showPrompt(this.value)"> -->
          <input type="text" class="lead" name ="ping" placeholder="Digite aqui o Endereço" id="ping">
          <br>
          <a class="btn btn-lg btn-success" onclick="showPrompt(document.getElementById('ping').value)">Ping</a>
          <!-- <button class="btn btn-lg btn-success" onclick="showPrompt(this.value)" value=">Ping</button> -->
        </form>
      </div>

      <div id="ajax">
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <form action="filter.php" method="post">
            <h2>Filter</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <fieldset>
              <div>
               Posição na Chain:
                <select name="optfilter">
                  <option value="-I">Incio</option>
                  <option value="-A">Fim</option>
                </select>
                <br>
                Chain:
                <select name="optchain">
                  <option value="INPUT">input</option>
                  <option value="OUTPUT">output</option>
                  <option value="FORWARD">forward</option>
                </select>
                <br>
                Interface:
                <select name="optinterface">
                  <option value="-i eth0">eth0</option>
                  <option value="-i eth1">eth1</option>
                  <option value="-i eth2">eth2</option>
                </select>
                <br>
                Protocolo:
                <select name="optprotocolo">
                  <option value="-p tcp">tcp</option>
                  <option value="-p udp">udp</option>
                </select>
                <br>
                Porta:
                <select name="optporta">
                  <option value="--dport 80">Porta 80</option>
                  <option value="--dport 53">Porta 53</option>
                </select>
                <br>
                Ação:
                <select name="optacao">
                  <option value="-j ACCEPT">accept</option>
                  <option value="-j DROP">drop</option>
                  <option value="-j REJECT">reject</option>
                </select>
              </div>
            </fieldset><br>
            <input class="btn btn-primary" type="submit" value="gerar">
           <!--  <a class="btn btn-primary" role="button">Filter</a> -->
          </form>
        </div>

        <div class="col-lg-4">
          <h2>Nat</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">Nat</a></p>
       </div>

        <div class="col-lg-4">
          <h2>Mangle</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">Mangle</a></p>
        </div>
      </div>

    
      <div class="footer">
        <p>Projeto DW</p>
      </div>

    </div> <!-- /container -->




</body></html>