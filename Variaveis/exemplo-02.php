<?php

$nome1 = "João";
$sobreNome = "Rangel";

$nomeCompleto = $nome1." ".$sobreNome; //Concatena nome e sobrenome

echo $nomeCompleto;

exit; // O PHP para a execução do programa

echo "<br>";

unset($nome1);

echo $nome1;

?>