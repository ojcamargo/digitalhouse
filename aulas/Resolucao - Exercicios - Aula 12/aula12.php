<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 12 - PHP</title>
  </head>
  <body>
    <p>Exercicio 1:</p>
    <?php
        $a = 10;
        var_dump($a);

        $b = 1.5;
        var_dump($b);

        $c = "c";
        var_dump($c);

        $d = 'd';
        var_dump($d);

        $e = 'digital house';
        var_dump($e);

        $f = "digital house";
        var_dump($f);

        $a = '15';
        var_dump($a);
        //1-g: quando adicionamos um numero entre aspas ele é considerado uma string

    ?>

    <p>Exercicio 2:</p>
    <?php
      $variavel01 = true;
      $variavel02 = false;
      $variavel03 = 0;
      $variavel04 = 1;
      $variavel05 = 6;
      $variavel06 = '';
      $variavel07 = "3";
      $variavel08 = "true";
      $variavel09 = 'false';
      $variavel10 = null;

      function tipoDado($varN) {
          if ( $varN == true ) {
            echo 'o valor ' . $varN . ' é verdadeiro.';
          } else {
            echo 'o valor ' . $varN . ' é falso.';
          }
      }
      tipoDado($variavel01); //essa função recebe um parametro e imprime um texto que diz se o valor é considerado true ou false.
     ?>
     <p>Exercicio 3:</p>
     <?php
        $animais = ["cão", "gato", "lêmure", "cavalo", "calopsita"];

        var_dump($animais);
        echo "<br>";
        //a
        $animais[] = "lobo";
        $animais[] = "guaxinim";

        var_dump($animais);
        echo "<br>";
        //b
        $animais[0] = "morcego";

        var_dump($animais);
        echo "<br>";
        //c
        $animais[100] = "leão";
        echo "<br>";
        //d
        $animais[16] = "peru";

        var_dump($animais);

      ?>
      <p>Exercicio 4:</p>
      <?php
          $carro = [
            "marca" => "volkswagen",
            "modelo" => "gol",
            "cor" => "branco",
            "placa" => "ABC-123"
          ];
          var_dump($carro);
          echo "<br>";
          $carro[0] = "Jane Doe";

          var_dump($carro);
          echo "<br>";


          $carro[14] = "Seguradora XPTO";

          var_dump($carro);

          echo "<br>";


          $carro["placa"] = "CAT-234";

          var_dump($carro);



      ?>

      <p>Exercicio 5:</p>

      <?php
          $inteiro = 10;
          $decimal = 1.5;
          //a
          echo $inteiro + $decimal;
          echo "<br>";

          //b
          echo $inteiro - $decimal;
          echo "<br>";

          //c
          echo $inteiro / $decimal;
          echo "<br>";

          //d
          echo $inteiro * $decimal;

          echo "<br>";

          //e
          $resto = $inteiro % $decimal;
          var_dump($resto);

          echo "<br>";

          //f
          $inteiro+=1;
          $decimal+=1;
          echo "$inteiro - $decimal";

          echo "<br>";

          //g

          $inteiro+=5;
          $decimal-=0.6;
          echo "$inteiro - $decimal";

          echo "<br>";

          //h
          $resultado = ($inteiro * 2 + $decimal) / ($inteiro/2);
          echo $resultado;
          echo "<br>";


          $um = "Três";
          $dois = "pratos";
          $tres = "de";
          $quatro = "trigo";
          $cinco = "para";
          $seis = "três";
          $sete = "tigres";
          $oito = "tristes";

          echo  "$um $dois $tres $quatro $cinco $seis $sete $oito";

          //Não é possivel começar variavel com numero.

       ?>

  </body>
</html>
