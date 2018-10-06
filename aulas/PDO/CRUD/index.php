<?php
$dsn = 'mysql:host=localhost;dbname=test;charset=utf8;port:3306';
$db_user = 'root';
$db_pass = '';
try
{
$db = new PDO($dsn,$db_user,$db_pass);
$query = $db->prepare('select * from idioma order by nome');
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$db = null;
} catch(PDOException $ex) {
echo $ex->getMessage();
die();
}
?>

<html>
<style>
body {
  font-family: arial;
  font-size: 11px;
  color: black;
}

a {
  text-decoration: none;
  cursor: pointer;
  color: black;
}
</style>
<body>
  <table style="width: 100%; border: 1px solid black;">
    <tr>
      <td style="border: 1px solid black; background-color: black; color: white; font-weigth: bold;">ID</td>
      <td style="border: 1px solid black; background-color: black; color: white; font-weigth: bold;">Nome</td>
      <td style="border: 1px solid black; background-color: black; color: white; font-weigth: bold;"></td>
    </tr>
    <?php foreach ($results as $key => $item) { ?>
        <tr>
          <td style="border: 1px solid black; background-color: gray;"><?php echo $item["idioma_id"] ?></td>
          <td style="border: 1px solid black; background-color: gray;"><?php echo $item["nome"] ?></td>
          <td style="border: 1px solid black; background-color: gray;">
            <a href='edit.php?id=<?php echo $item["idioma_id"]; ?>'>Editar</a>
            <a href='delete.php?id=<?php echo $item["idioma_id"]; ?>'>Excluir</a>
          </td>
        </tr>
    <?php } ?>
  </table>
  <br />
  <a href="create.php">NOVO</a>
</body>
</html>
