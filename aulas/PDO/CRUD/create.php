<?php
  if(isset($_POST["nome"])) {
    try
    {
      $dsn = 'mysql:host=localhost;dbname=test;charset=utf8;port:3306';
      $db_user = 'root';
      $db_pass = '';
      $db = new PDO($dsn,$db_user,$db_pass);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $query = $db->prepare('insert into idioma (nome) values (:nome)');
      $query->bindValue(':nome',$_POST["nome"]);
      $query->execute();
      $db = null;
      header("location:index.php");
    } catch(PDOException $ex) {
      echo $ex->getMessage();
      die();
    }
  }
?>
<html>
<head>
<body>
  <h1>Novo</h1>
  <form name="form1" method="post" action="create.php">
    <label for="nome"></label>
    <input type="text" id="nome" name="nome" size="100" maxlength="30" required />
    <button type="submit">Enviar</button>
  </form>
</body>
</html>
