<?php 
session_start();
$email_cadastrado = $_SESSION['email'];
$senha_cadastrado = $_SESSION['senha'];


$email = $_request['email'];
$senha = $_request['senha'];

if($senha == $senha_cadastrado && $email == $email_cadastrado){
    echo "Logado";
}else{
    echo "Email ou Senha Incorretos!";
}
?>