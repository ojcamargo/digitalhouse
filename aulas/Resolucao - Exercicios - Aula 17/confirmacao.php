<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Confirmação</title>
    <style>
      body{
        padding: 20px;
        font-family: sans-serif;
      }
    </style>
  </head>
  <body>
        <?php
            if($_GET){
              $nome_usuario = $_GET['name'];
              $email = $_GET['email'];
              $idade = $_GET['idade'];
              $hobbies = $_GET['hobbies'];
              $senha = $_GET['senha'];
              $confirmasenha = $_GET['confirma-senha'];
              $pais = $_GET['pais'];
        ?>
          <p>Agradecemos a sua inscrição, <b><?php echo $nome_usuario; ?></b>. <br>
            Você disse que tem <b><?php echo $idade; ?></b> anos. <br>
            Registramos o seu e-mail: <b><?php echo $email; ?></b>.
            Obrigado!</p>
        <?php }  ?>

        <p>Hobbies:</p>
        <ul>
            <?php foreach($hobbies as $hobbie): ?>
              <li><?php echo $hobbie; ?></li>
            <?php endforeach; ?>
        </ul>

        <p>Verificação de senha:</p>
        <p>
          <?php

            if($senha == $confirmasenha){
              echo "As senhas estão iguais!";
            } else {
              echo "As senhas estão diferentes!";
            }

           ?>
        </p>

        <?php
          //exercicio 5

          if(strlen($nome_usuario) < 15 || $idade < 18 || $nome_usuario == ""){
            // var_dump($_GET);
            header('location: registro.php?erro=true'); // dessa forma ele redireciona e passa uma informação com GET
          } else {
            echo "<p style='color:green'>Dados validados com sucesso!</p>";
          }

         ?>




  </body>
</html>
