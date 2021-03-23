<!-- tentar resolver o erro de "sessão?" q faz a msg ficar aparecendo -->
<!DOCTYPE html>
<?php
require_once 'bd_connect.php';
session_start();

if (isset($_SESSION['logado'])) :
  header('Location: home.php');
endif;

if (isset($_POST['btn-login'])) :
  $login = mysqli_escape_string($connect, $_POST['user']);
  $pass = mysqli_escape_string($connect, $_POST['pass']);
  $erros = array();

  if (empty($login) or empty($pass)) :
    $erros[] = "<li>Usuário e senha são campos obrigatórios</li>";
  else :
    $pass = md5($pass);
    $sql = "SELECT * FROM usuarios WHERE login='$login' and senha='$pass'";
    $resultado = mysqli_query($connect, $sql);

    if (mysqli_num_rows($resultado) == 1) :
      $dados = mysqli_fetch_array($resultado);
      mysqli_close($connect);
      $_SESSION['logado'] = true;
      $_SESSION['id_usuario'] = $dados['id'];
      header('Location: home.php');
    else :
      $erros[] = "<li>Usuário ou senha incorretos</li>";
    endif;
  endif;
endif;

?>

<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link href="./img/icon.png" rel="icon" />
  <title>BuildIn - Login</title>
</head>

<body>
  <section class="bg-color">
    <div class="login-box">
      <div class="box">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <img class="login-icon image is-96x96" src="./img/login-icon.png">
          <div class="field">
            <label class="label">Usuário</label>
            <div class="control">
              <input name="user" class="input" type="text" placeholder="Usuário">
            </div>
          </div>

          <div class="field">
            <label class="label">Senha</label>
            <div class="control">
              <input name="pass" class="input" type="password" placeholder="********">
            </div>
          </div>

          <button id="btn-submit" name="btn-login" onclick="loading()" type="submit" class="button  is-primary">Logar</button>

        </form>
        <a href="./registro.php">
          <button id="btn-redirect" name="btn-redirect" type="submit" class="button is-primary redirect-button">Registrar</button>
        </a>
        <div class="error_type">
          <?php
          if (!empty($erros)) :
            foreach ($erros as $erro) :
              echo $erro;
            endforeach;
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>
  <script src="./js/app.js"></script>
</body>

</html>