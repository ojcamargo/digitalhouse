<?php
function abreArquivo(){
  $caminho = 'texto.txt';
  if(file_exists($caminho)){
    $arquivo = fopen($caminho, 'a+');
  }else{
    $arquivo = fopen($caminho, 'x+');
  }
  return $arquivo;
}

$arquivo = abreArquivo();

for($i=0; $i < 100; $i++) {
  fwrite($arquivo, "Olá mundo! testando.\r\n");
}
fclose($arquivo);

$caminho = 'texto.txt';
echo "<hr>";
echo file_get_contents($caminho);
echo "<hr>";
$arquivo = fopen($caminho, 'r');
while(false !== ($linha = fgets($arquivo))){
  echo $linha ."<br>";
}
fclose($arquivo);
?>
