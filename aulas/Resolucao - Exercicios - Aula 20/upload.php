<?php
if(isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] == UPLOAD_ERR_OK){
  $file_to = "uploads/".$_FILES['arquivo']['name'];
  if(file_exists($file_to)){
      echo "ERRO: Arquivo já existe!";
  }else{
    $ok = move_uploaded_file($_FILES['arquivo']['tmp_name'], $file_to);
    if($ok) { echo "Arquivo enviado com sucesso!"; }
  }
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
        <input type="file" name="arquivo"><br>
        <input type="submit" value="Enviar">
    </form>
  </body>
</html>
