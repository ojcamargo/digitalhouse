<?php
  if($_POST){
    $local_file = "dados.json";
    if(file_exists($local_file)){
      $file = file_get_contents($local_file);
      $json = json_decode($file, true);
    }else{
      $json = [
        "usuarios" => []
      ];
    }
    $error = [];
    foreach($_POST as $chave => $valor){
      if($valor == ""){
        $error[] = "$chave em branco!";
      }
    }
    if($_POST['senha'] != $_POST['confirma-senha']){
      $error[] = "Senhas não conferem!";
    }
    foreach($json['usuarios'] as $user) {
      if($user['email'] == $_POST['email']){
        $error[] = "Usuário com esse e-mail já está cadastrado!";
      }
    }
    if(!count($error)){
      unset($_POST['confirma-senha']);
      $_POST['senha'] = password_hash($_POST['senha'], PASSWORD_DEFAULT);
      $json["usuarios"][] = $_POST;
      $file = json_encode($json);
      if(file_put_contents($local_file, $file)){
        header('Location: sucesso.html');
      }

    }
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Aula 18 - PHP</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='registro.php' method='post'>
            <fieldset>
                <legend>Inscreva-se</legend>

                <div class='container'>
                    <label for='name' >Nome completo: </label><br/>
                    <input type='text' name='name' id='name' value='<?php echo isset($_POST['name'])?$_POST['name']:''; ?>' maxlength="50" /><br/>
                </div>
                <div class='container'>
                    <label for='email' >E-mail:</label><br/>
                    <input type='text' name='email' id='email' value='<?php echo isset($_POST['email'])?$_POST['email']:''; ?>' maxlength="50" /><br/>
                </div>
                <div class='container'>
                    <label for='idade' >Idade*:</label><br/>
                    <input type='number' name='idade' id='idade' value='<?php echo isset($_POST['idade'])?$_POST['idade']:''; ?>' maxlength="50" /><br/>
                </div>
                <div class='container'>
                    <label for='senha' >senha*:</label><br/>
                    <input type='password' name='senha' id='senha' value='' maxlength="50" /><br/>
                </div>
                <div class='container'>
                    <label for='confirma-senha' >confirmar senha*:</label><br/>
                    <input type='password' name='confirma-senha' id='confirma-senha' value='' maxlength="50" /><br/>
                </div>
                <br>
                <div class='container'>
                  <button type="submit">Enviar</button>
                </div>

                <small>* campos obrigatórios</small>
                <div class="error">
<?php
if(isset($error) && count($error)){
  echo implode("<br>", $error);
}
?>
                </div>
            </fieldset>
        </form>

    </body>
</html>
