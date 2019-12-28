<?php
////TIPOS BÁSICOS///////////
$mome = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
////////////////////////////
////TIPO COMPOSTO//////////////////////////////
$frutas = array("abacaxi","laranja", "manga");

//echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);
///////////////////////////////////////////////
////TIPOS ESPECIAIS////////////////////////////

$arquivo = fopen("exemplo-02.php", "r");
//var_dump($arquivo);
$nulo = null;
///////////////////////////////////////////////
?>