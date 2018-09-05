<?php
// echo "<pre>";
//   var_dump($_POST);
//   echo "<br>";
//   var_dump($_FILES);
//   echo "</pre>";
if(isset($_FILES['avatar']) && $_FILES['avatar']['error'] == UPLOAD_ERR_OK){
  $date = Date("YmdHis");
  $ok = move_uploaded_file($_FILES['avatar']['tmp_name'], "uploads/$date - ".$_FILES['avatar']['name']);
  if($ok) { echo "Arquivo enviado com sucesso!"; }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload</title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="avatar"><br>
        <input type="submit" value="Enviar">
    </form>
  </body>
</html>
