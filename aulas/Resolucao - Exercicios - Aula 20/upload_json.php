<?php
if(isset($_FILES['json']) && $_FILES['json']['error'] == UPLOAD_ERR_OK){
  $nomeArquivo = explode(".", $_FILES['json']['name']);
  $extensao = array_pop($nomeArquivo);
  if($extensao == 'json'){
    $file_to = "json/".$_FILES['json']['name'];
    if(file_exists($file_to)){
        echo "ERRO: Arquivo já existe!";
    }else{
      $ok = move_uploaded_file($_FILES['json']['tmp_name'], $file_to);
      if($ok) { echo "Arquivo enviado com sucesso!"; }
    }
  }else{
    echo "Arquivo inválido!";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload JSON</title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="json" accept=".json"><br>
        <input type="submit" value="Enviar">
    </form>
    <hr>
    <h2>Arquivos:</h2>
    <ul>
      <?php
      if($dir = opendir('json')){
        while(false !== ($file = readdir($dir))){
          if($file != '.' && $file != '..'){
            echo "<li><a href='upload_json.php?arquivo=$file'>$file</a></li>";
          }
        }
        closedir($dir);
      }
      ?>
    </ul>
    <?php if(isset($_GET['arquivo'])): ?>
      <hr>
      <h2>JSON</h2>
      <ul>
        <?php
          $json = file_get_contents('json/'.$_GET['arquivo']);
          $json = json_decode($json, true);
          foreach ($json as $key => $value) {
            if(is_array($value)){
              echo "<li>$key : ";
              var_dump($value);
              echo "</li>";
            }else{
              echo "<li>$key : $value</li>";
            }
          }
        ?>
      </ul>
    <?php endif; ?>
  </body>
</html>
