<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

if(isset($_GET["id"])) {
  try
  {
    $dsn = 'mysql:host=localhost;dbname=test;charset=utf8;port:3306';
    $db_user = 'root';
    $db_pass = '';
    $db = new PDO($dsn,$db_user,$db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $db->prepare('delete from idioma where idioma_id = :id');
    $query->bindValue(':id',$_GET["id"]);
    $query->execute();
    $db = null;
    header("location:index.php");
  } catch(Exception $ex) {
    echo $ex->getMessage();
    die();
  }
}
?>
