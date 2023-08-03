<?php
/*
pegar os dados que vem do formulario via METHOD='GET'
*/
// metodos globais ou variaveis globais
$nome = $_GET['nome'];
$CPF = $_GET['cpf'];
$RG = $_GET['rg'];
// mostrar
echo "Seu nome é: " . $nome . " <br>Seu CPF é: " .  $CPF . " <br>Seu RG é: " .  $RG;
?>