<!DOCTYPE html>
<?php
require_once 'bd_connect.php';
session_start();
if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"/>
    <link rel="stylesheet" href="./css/style.css"/>
    <link href="./img/warning.png" rel="icon"/>
    <title>Opss...</title>
</head>
<body>
    <section class="main-bg-color">
        <div class="construct-div">
            <h1 class="title is-1 special-content">Página em construção!</h1>
            <p class="subtitle is-3 special-content">Estaremos prontos em breve. <a href="home.php">Retornar ao início.</a></p>
            <img class="img-construct" alt="página em construção" src="./img/construct.png">
        </div>
    </section>
</body>
</html>