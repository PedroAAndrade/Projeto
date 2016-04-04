<?php
if(!isset($_GET['q'])){
	header("Location:home.php");
}
$q = $_GET['q'];
$result = shell_exec("ping ".$q); //vai no terminal para testar o ping com a maquina
echo "<pre>$result</pre>"; //exibe o resultado do ping da variavel $result
?>
