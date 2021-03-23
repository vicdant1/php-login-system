<?php
//conexão com o bd
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buildlogin";
//conexão em si
$connect = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;

?>