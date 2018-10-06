<?php
$dsn = 'mysql:host=localhost;dbname=test;charset=utf8;port:3306';
$db_user = 'root';
$db_pass = '';
try
{
$db = new PDO($dsn,$db_user,$db_pass);
$query = $db->prepare('select * from idioma');
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
if(isset($results)) {
  $combo = '<select>';
  foreach ($results as $key => $value) {
     $combo = $combo . "<option value=" . $value["idioma_id"] . ">" . $value["nome"] . "</option>";
  }
  $combo .= '</select>';
}
} catch(PDOException $ex) {
echo $ex->getMessage();
}
?>
<html>
<body>
  <?php echo $combo; ?>
</body>
</html>
