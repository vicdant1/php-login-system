<!DOCTYPE html>
<?php
session_start();
include_once 'conditional.php';
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"/>
    <link rel="stylesheet" href="./css/style.css"/>
    <link href="./img/icon.png" rel="icon"/>
    <title>BuildIn - Registro</title>
</head>
<body>
  <section class="bg-color">
  <div class="login-box">
      <div class="box">
        <form method="post" action="cadastrar.php">
                <div class="field">
                  <label class="label">Nome</label>
                  <div class="control">
                    <input name="nome" class="input" type="text" placeholder="Nome">
                  </div>
                </div>

                <div class="field">
                  <label class="label">Usuário</label>
                  <div class="control">
                    <input name="usuario" class="input" type="text" placeholder="Usuário">
                  </div>
                </div>
      
                <div class="field">
                  <label class="label">Senha</label>
                  <div class="control">
                    <input name="senha" class="input" type="password" placeholder="********">
                  </div>
                </div>

                <div class="field">
                  <div class="control">
                    <label class="checkbox">
                      <input name="check" type="checkbox">
                      Li e concordo com os <a href="#">termos e condições</a>
                    </label>
                  </div>
                </div>
              <button id="btn-register" name="btn-register" type="submit" class="button is-primary">Registrar</button>
          </form>
              <?php
                if($empty == 1):?>
                  <p style="color: rgb(240, 35, 35)" class="login-red">Todos os campos são necessários</p>  
                <?php
                  endif;
                  unset($_SESSION['empty']);
                ?>

              <?php
                if($user == 1):?>
                  <p style="color: rgb(240, 35, 35)" class="login-red">O usuário informado já existe</p>
                <?php
                  endif;
                  unset($_SESSION['userExistente']);
              ?>
              <p class="login-red">Já tem uma conta? <a href="index.php">Faça login.</a></p>
            </div>
          </div>
    </div>
  </section>
  <script src="./js/app.js"></script>
</body>
</html>