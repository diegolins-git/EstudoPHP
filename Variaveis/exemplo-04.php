<?php

$nome = (int)$_GET["a"];
//var_dump($nome);


//Pegar o IP do usuário
//$ip = $_SERVER["REMOTE_ADDR"];

//Pega o nome do arquivo
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>