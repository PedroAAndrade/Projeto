<?php
if(!isset($_POST['optfilter']) || (!isset($_POST['optchain'])) || (!isset($_POST['optinterface'])) || (!isset($_POST['optprotocolo'])) || (!isset($_POST['optporta'] )) ||   (!isset($_POST['optacao']))){ //se ta certo as opções passadas
	header("Location:home.php");
}
$optfilter = $_POST['optfilter']; //passa para as variaveis as opções passadas do post
$optchain = $_POST['optchain'];
$optinterface = $_POST['optinterface'];
$optprotocolo = $_POST['optprotocolo'];
$optporta = $_POST['optporta'];
$optacao = $_POST['optacao'];

$command = $optfilter." ".$optchain." ".$optinterface." ".$optprotocolo." ".$optporta." ".$optacao;


$result = shell_exec("iptable -t ".$command);//envia para a maquina a regra
echo "<pre>$result</pre>";
?>

