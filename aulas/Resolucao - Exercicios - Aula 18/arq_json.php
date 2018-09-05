<?php
  $json = json_decode(file_get_contents('categorias.json'), true);
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercício</title>
  </head>
  <body>
    <form action="" method="post">
      Categorias:<br>
      <?php foreach($json['categorias'] as $categoria):?>
        <input type="checkbox" name="categorias[]" value="<?php echo $categoria['id']; ?>" id="cat<?php echo $categoria['id']; ?>">
        <label for="cat<?php echo $categoria['id']; ?>"><?php echo $categoria['nome']; ?></label><br>
      <?php endforeach; ?>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
