<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if($dir = opendir('uploads')){
      while(false !== ($file = readdir($dir))){
        if($file != '.' && $file != '..'){
          echo "<a ref='uploads/$file' download>$file</a><br>";
        }
      }
      closedir($dir);
    }
    ?>
  </body>
</html>
