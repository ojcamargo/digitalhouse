<?php
  $dsn = 'mysql:host=localhost;dbname=test;charset=utf8;port:3306';
  $db_user = 'root';
  $db_pass = '';

  if(isset($_POST["id"])) {
    try
    {
      $db = new PDO($dsn,$db_user,$db_pass);
      $query = $db->prepare('update idioma set nome = :nome where idioma_id = :id');
      $query->bindValue(':nome',$_POST["nome"]);
      $query->bindValue(':id',$_POST["id"]);
      $query->execute();
      $results = $query->fetchAll(PDO::FETCH_ASSOC);
      $db = null;
      header("location:index.php");
    } catch(PDOException $ex) {
      echo $ex->getMessage();
      die();
    }
  } elseif(isset($_GET["id"])) {
    try
    {
      $db = new PDO($dsn,$db_user,$db_pass);
      $query = $db->prepare('select nome from idioma where idioma_id = :id');
      $query->bindValue(':id',$_GET["id"]);
      $query->execute();
      $rs = $query->fetch(PDO::FETCH_ASSOC);
      $db = null;
    } catch(PDOException $ex) {
      echo $ex->getMessage();
      die();
    }
  }
?>
<html>
<head>
<body>
  <h1>Editar</h1>
  <form name="form1" method="post" action="edit.php">
    <label for="nome"></label>
    <input type="hidden" id="id" name="id" value="<?php echo $_GET["id"] ?>" />
    <input type="text" id="nome" name="nome" size="100" maxlength="30" value='<?php echo $rs["nome"]; ?>' required />
    <button type="submit">Enviar</button>
  </form>
</body>
</html>
