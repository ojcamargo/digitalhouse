<?php
  if($_POST){
    if(file_exists('login.json')){
      $dados = json_decode(file_get_contents('login.json'), true);
    }else{
      $dados = [ "usuarios" => [] ];
    }
    foreach ($dados['usuarios'] as $key => $value) {
      if($value['email'] == $_POST['email'] && password_verify($_POST['senha'], $value['hash'])){
        header('Location: bem-vindo.php');
      }
    }
  }
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form action="" method="post">
      <fieldset>
          <legend>Login</legend>
          <label for="email">E-Mail:</label>
          <input type="email" name="email" id="email"><br>
          <label for="senha">Senha:</label>
          <input type="password" name="senha" id="senha"><br>
          <button type="submit">Entrar</button>
      </fieldset>
    </form>
  </body>
</html>
