<?php
$dsn = 'mysql:host=localhost;dbname=test;charset=utf8;port:3306';
$db_user = 'root';
$db_pass = '';
try
{
$db = new PDO($dsn,$db_user,$db_pass);
$query = $db->prepare('select * from filme where titulo like :nome');
$query->bindValue(':nome','%ac%');
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($results);
echo "</pre>";
} catch(PDOException $ex) {
echo $ex->getMessage();
}
?>
