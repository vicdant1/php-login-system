<?php
session_start();
include_once 'bd_connect.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
$agree = filter_input(INPUT_POST, 'check');
$sql = "SELECT * FROM usuarios WHERE login='$usuario'";
$result = mysqli_query($connect, $sql);
$nor = mysqli_num_rows($result);

if(empty($nome) or empty($usuario) or empty($senha) or $agree != true):
    $_SESSION['empty'] = true;
    $empty = 1;
elseif($nor == 1):
    $_SESSION['userExistente'] = true;
    $user = 1;
else:
    $sql = "INSERT INTO usuarios (nome, login, senha) VALUES ('$nome', '$usuario', '$senha')";
    $resultado = mysqli_query($connect, $sql);
endif;
mysqli_close($connect);
header('location: registro.php');
?>