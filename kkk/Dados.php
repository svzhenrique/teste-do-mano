<?php
// pegar os dados vindo do formulario

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$estado = $_POST['estado'];
$sexo = $_POST['sexo'];
if(isset($_POST['op01'])){
    $mysql = $_POST['op01'];
}else{
    $mysql = null;
}

if(isset($_POST['op02'])){
    $php = $_POST['op02'];
}else{
    $php = null;
}

if(isset($_POST['op03'])){
    $html = $_POST['op03'];
}else{
    $html = null;
}
$mensagem = $_POST['ms'];
$senha = $_POST['senha'];

echo "Nome: " . $nome;
echo "<br>Email: " . $email;
echo "<br>Idade: " . $idade;
echo "<br>Estado: " . $estado;
echo "<br>Sexo: " . $sexo;
echo "<br>Revista:  $php $mysql , $html";
echo "<br>Mensagen: " . $mensagem;
echo "<br>Senha: " . $senha; 
