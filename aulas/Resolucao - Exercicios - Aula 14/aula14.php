<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 14 - Loops</title>
    <style>
      body{
        font-family: sans-serif;
      }
      p{
        border-top: 1px dotted #ccc;
        margin: 10px 0;
        padding: 10px 0;
      }
    </style>
  </head>
  <body>
<p>Exercicio 1:</p>
<?php
  for ($i=1; $i <= 100; $i++) {
    echo $i. ' - ';
  }
?>
<p>Exercicio 2:</p>
<?php
  $num_aleatorio = mt_rand(1,100);
  for ($i=1; $i <= 100; $i++) {
    echo $i. ' - ';
    if($i == $num_aleatorio){
      break;
    }
  }
  ?>
  <p>Exercício 3:</p>
  <?php
    for ($i=1; $i <= 10; $i++) {
      echo "2 x $i = ". 2 * $i . "<br>";
    }
   ?>
   <p>Exercicio 4:</p>
   <?php
      $cara = 0;
      while($cara < 5){
        $moeda = rand(0,1);
        if($moeda == 1){
          $cara++;
        }
        $i++;

      }
      echo "Joguei a moeda $i vezes!";
   ?>
   <p>Exercicio 5:</p>
   <?php
      do{
        $moeda = rand(0,1);
        $i++;
      }while($moeda != 1);
      echo "Joguei a moeda $i vezes!";

   ?>
   <p>Exercicio 6:</p>
   <?php
    $nomes = ["Hendy", "Vini", "Vitu", "Thomás","Jess"];
    for ($i=0; $i < count($nomes); $i++) {
      echo "$nomes[$i] ";
    }
    $i = 0;
    while($i < count($nomes)){
      echo "$nomes[$i] ";
      $i++;
    }
    $a = 0;
    do{
      echo "$nomes[$a] ";
      $a++;
    }while($a < count($nomes));

  ?>
  <p>Exercicio 7:</p>
  <?php
    $numeros =[]; //criando um array vazio

    for ($i=0; $i < 10; $i++) {
      $numeros[$i] = mt_rand(0,10); // atribuindo numeros aleatorios ao array
    }

    echo "<br>Utilizando foreach: <br>";
    foreach ($numeros as $value) {
      echo "$value - ";

      if($value == 5){
        echo "Encontramos um 5!";
        break;
      }
    }

    echo "<br>Utilizando for: <br>";
    for ($i=0; $i < count($numeros); $i++) {
      echo $numeros[$i]. ", ";
      if($numeros[$i] == 5){
        echo "<br>Encontramos um 5!<br>";
        break;
      }
    }

    echo " <br>Utilizando while: <br>";

    $i = 0; //contador do while e do/while
    while($i < count($numeros)){
      echo $numeros[$i]. ", ";// imprime os valores de cada posição

      if($numeros[$i] == 5){// verifica se o valor da posição atual é um 5
        echo "<br> Encontramos um 5! <br>";// avisa quando encontra um 5
        break;// para o loop
      }
      $i++; //acrescente +1 no contador;
    }

    echo "Utilizando do/while: <br>";
    do{
      echo $numeros[$i]. ", ";
      if($numeros[$i] == 5){
        echo "<br> Encontramos um 5! <br>";
        break;
      }
      $i++;
    } while($i < count($numeros));

   ?>
   <p>Exercicio 8:</p>

   <?php
     $letreiro = range('a', 'o');
     foreach ($letreiro as $key => $value) {
       echo "Na posição $key temos o valor: $value. <br>";
     }
    ?>
    <p>Exercicio 9 e 10:</p>
    <?php
      $mascota = ["animal" => "raposa",
                  "idade" => 5,
                  "altura" => 0.3,
                  "nome" => "Anne"];

        foreach ($mascota as $key => $value) {
          echo "$key: $value <br>";
        }
      ?>
   <p>Exercicio 11:</p>

   <?php
   $ceu = array( "Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=> "Bruxelas",
      "Dinamarca"=>"Copenhagen", "Finlândia"=>"Helsinki", "França" => "Paris",
      "Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana", "Alemanha" => "Berlim", "Grécia" =>
      "Atenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdã", "Portugal"=>"Lisboa",
      "Espanha"=>"Madri", "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres", "Chipre"=>"Nicósia",
      "Lituânia"=>"Vilnius", "República Tcheca"=>"Praga", "Estônia"=>"Tallinn",
      "Hungria"=>"Budapeste", "Letônia"=>"Riga", "Malta"=>"Valletta", "Áustria" => "Viena",
      "Polônia"=>"Varsóvia") ;

      foreach ($ceu as $key => $value) {
        echo "A capital da $key é $value. <br>";
      }
    ?>
    <p>Exercicio 12:</p>
    <?php
    $ceu = [
        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
        "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
        "França" => ["Paris", "Nantes", "Lyon"],
        "Itália" => ["Roma", "Milão", "Veneza"],
        "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
        ];
        foreach ($ceu as $key => $value) {
          echo "As cidades da $key são: <br>";
          echo "<ul>";
          foreach ($value as $value) {
            echo "<li> $value</li>";
          }
          echo "</ul>";
        }
      ?>
      <p>Exercicio 13:</p>
      <?php
      $ceu = [
          "Argentina" => [ "naAmerica" => true, "cidades" => ["Buenos Aires", "Córdoba", "Santa Fé"]],
          "Brasil" => ["naAmerica" => true, "cidades" => ["Brasília", "Rio de Janeiro", "São Paulo"]],
          "Colômbia" => ["naAmerica" => true, "cidades" => ["Cartagena", "Bogotá", "Barranquilla"]],
          "França" => ["naAmerica" => false, "cidades" => ["Paris", "Nantes", "Lyon"]],
          "Itália" => ["naAmerica" => false, "cidades" => ["Roma", "Milão", "Veneza"]],
          "Alemanha" => ["naAmerica" => false, "cidades" => ["Munique", "Berlim", "Frankfurt"]]
          ];

          foreach ($ceu as $key => $value) {
            if($value["naAmerica"]){
              echo "As cidades da $key são: <br>";
              echo "<ul>";
              foreach ($value["cidades"] as $v) {
                echo "<li> $v</li>";
              }
              echo "</ul>";
            }
          }
       ?>
  </body>
</html>
