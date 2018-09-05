<?php
  if($_POST){
    if(file_exists('login.json')){
      $dados = json_decode(file_get_contents('login.json'), true);
    }else{
      $dados = [ "usuarios" => [] ];
    }
    if($_POST['senha'] == $_POST['confirma-senha']){
      $usuario = [
        "email" => $_POST['email'],
        "hash" => password_hash($_POST['senha'], PASSWORD_DEFAULT)
      ];
      $dados['usuarios'][] = $usuario;
      $json = json_encode($dados);
      file_put_contents('login.json', $json);
    }
  }
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
  </head>
  <body>
    <form action="" method="post">
      <fieldset>
          <legend>Inscreva-se</legend>
          <label for="email">E-Mail:</label>
          <input type="email" name="email" id="email"><br>
          <label for="senha">Senha:</label>
          <input type="password" name="senha" id="senha"><br>
          <label for="confirma-senha">Confirmar Senha:</label>
          <input type="password" name="confirma-senha" id="confirma-senha"><br>
          <button type="submit">Enviar</button>
      </fieldset>
    </form>
  </body>
</html>
