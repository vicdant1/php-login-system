<!DOCTYPE html>
<?php
require_once 'bd_connect.php';
session_start();
if (!isset($_SESSION['logado'])) :
  header('Location: index.php');
endif;
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id='$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link href="./img/icon.png" rel="icon" />
  <title>BuildIn - Home</title>
</head>

<body>
  <section class="main-bg-color">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item">
          <img src="./img/nav-icon.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="home.php">
            Início
          </a>

          <a class="navbar-item" href="construct.php">
            Empresas parceiras
          </a>

          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              Mais
            </a>

            <div class="navbar-dropdown" href="construct.php">
              <a class="navbar-item" href="construct.php">
                Sobre nós
              </a>
              <a class="navbar-item" href="construct.php">
                Empregos
              </a>
              <a class="navbar-item" href="construct.php">
                Contatos
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item" href="construct.php">
                Reporte um problema
              </a>
            </div>
          </div>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-light">
                Meu perfil
              </a>
              <a class="button is-light" href="logout.php">
                Sair
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <h1 class="subtitle is-3">Olá ,$usuario, seja bem vindo.</h1>
  </section>
  <script src="./js/app.js" type="text/javascript"></script>
</body>

</html>