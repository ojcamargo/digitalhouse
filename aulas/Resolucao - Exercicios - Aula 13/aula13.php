<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 13</title>
    <style>
      body{
        font-family: sans-serif;
      }
      p{
        margin: 20px 0;
        border-top: 1px dotted #ccc;
      }
    </style>
  </head>
  <body>
    <p>exercício 1:</p>
      <?php
        // exercicio 1

        $a = 23;
        $b = 15;

        if ($a > $b) {
          echo 'O maior número é '. $a;
        } else {
          echo 'O maior número é '. $b;
        }
    ?>
    <p>exercicio 2:</p>
    <?php
        // exercício 2

        $num = rand(1,5);
        if($num == 3 || $num == 5){
          echo 'numero gerado = '.$num;
        }else {
          echo 'erroooooou';
        }
?>
  <p>exercicio 3:</p>
<?php
        // exercicio 3
        if($num !== 3){
          echo 'O número NÃO é 3';
        }else {
          echo $num;
        }
      ?>
      <p>Exercício 4:</p>
      <?php
        // exercicio 4

        $n_rand = rand(1,100);
        echo "numero sorteado: $n_rand <br>";
        if($n_rand > 50){
          echo "O número é maior que 50";
        } else {
          echo "O número é menor que 50";
        }

      ?>

      <p>Exercicio 5:</p>
      <?php
        $numcinco = rand(0, 100);

        if($numcinco > 50 && $numcinco%2==0 || $numcinco === 0){
          echo 'O número cumpre a condição';
        }else{
          echo 'O número NÃO cumpre a condição';
        }
       ?>
       <p>Exercicio 6:</p>
       <?php
          $idade = 22;
          $casado = true;
          $sexo = "Outro";

          if ($idade > 18 && !$casado || $sexo === "Outro") {
              echo 'Boas Vindas!';
          }else{
            echo 'cai fora!';
          }
      ?>
      <p> Exercício 7 e 8:</p>
      <?php
        $quantidadeDeAlunos = 100;

        if($quantidadeDeAlunos){
          echo '$quantidadeDeAlunos true';
        }else {
          echo '$quantidadeDeAlunos false';
        }
        echo "<br>";
        if($i = 0){
          echo "true";
        }else {
          echo "false";
        }
       ?>
       <p>Exercicio 9:</p>
       <?php
          $numero = 42;
          $resultado = $numero%2==0 ? "O número é par" : "O número é impar";
          echo $resultado;
        ?>

        <p>Exercicio 10 e 11:</p>
        <?php
            $i = mt_rand(1,5);
            switch($i){
              case 1:
                echo "i é igual a 1";
                break;
              case 2:
                echo "i é igual a 2";
                break;
              // case 3:
              //   echo "i é igual a 3";
              //   break;
              // case 4:
              //   echo "i é igual a 4";
              //   break;
              // case 5:
              //   echo "i é igual a 5";
              //   break;
              default:
                echo "NÃO é igual a 1 ou 2";
                break;
            }
        ?>
        <p>Exercicio 12:</p>
        <?php
          $x = mt_rand(1, 100);
          $y = mt_rand(1, 100);
          echo "$x, $y <br>";
          if($x > $y){
            echo '$x é maior';
          } elseif ($x === $y) {
            echo '$x e $y são iguais!';
          } else {
            echo '$x é menor';
          }

         ?>


  </body>
</html>
