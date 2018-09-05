<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Aula 18 - PHP</title>
</head>
<body>
  <?php
      $logado = false;
      if($_POST){
          $dados = json_decode(file_get_contents('dados.json'));
          foreach ($dados['usuarios'] as $user) {
            if($user['email'] == $_POST['email'] && password_verify($_POST['senha'], $user['senha'])){
              $logado = true;
            }
          }
      }
  ?>
    <form id='login' action='login.php' method='post'>
        <fieldset>
            <legend>Login</legend>

            <div class='container'>
                <label for='email' >E-mail:</label><br/>
                <input type='text' name='email' id='email' value='<?php echo isset($_POST['email'])?$_POST['email']:''; ?>' maxlength="50" /><br/>
            </div>
            <div class='container'>
                <label for='senha' >senha:</label><br/>
                <input type='password' name='senha' id='senha' value='' maxlength="50" /><br/>
            </div>
            <div class='container'>
              <button type="submit">Entrar</button>
            </div>
        </fieldset>
    </form>

</body>
</html>
