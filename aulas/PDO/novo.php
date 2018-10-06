<?php
$dsn = 'mysql:host=localhost;dbname=test;charset=utf8;port:3306';
$db_user = 'root';
$db_pass = '';
try
{
$nome = "Portugues";
$db = new PDO($dsn,$db_user,$db_pass);
$query = $db->prepare('insert into idioma (nome,ultima_atualizacao) values(:nome,sysdate())');
$query->bindValue(':nome',$nome);
$query->execute();
echo $query->rowCount();
} catch(PDOException $ex) {
echo $ex->getMessage();
}
