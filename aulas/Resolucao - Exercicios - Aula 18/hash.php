<?php
function exercicio(){
  $texto = "Texto sem criptografia!!!";
  echo $texto . "<br>";
  echo md5($texto) . "<br>";
  echo sha1($texto) . "<br>";
  echo password_hash($texto, PASSWORD_DEFAULT) . "<br>";
  echo password_hash($texto, PASSWORD_BCRYPT) . "<br>";
}
exercicio();
?>
