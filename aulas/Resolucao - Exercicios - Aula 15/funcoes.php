<?php
  $numeroMagico = 15;
  //exercicio 1-a
  // function maior($a, $b, $c) {
  global $funcoesExecutadas;
    //   $funcoesExecutadas++;


  //   return max($a, $b, $c);
  // }

  // echo maior(42, 37, 90);

  //exercicio 1-b


  // function tabela($min, $max){
  global $funcoesExecutadas;
    //   $funcoesExecutadas++;


  //   $result = [];
  //   for ($i=$min; $i <= $max; $i++) {
  //     $result[] = $i;
  //   }
  //   return $result;
  // }

  // foreach (tabela(2, 10) as $value) {
  //   echo "$value \n";
  // }

  // 1-d

  function maior($a, $b, $c = false) {
    global $funcoesExecutadas;
    $funcoesExecutadas++;


    global $numeroMagico;
    if(!$c){
      $c = $numeroMagico;
    }
    return max($a, $b, $c);
  }
  // echo maior(4,78, 99);

  //1-e
  function tabela($min, $max = null){
    global $funcoesExecutadas;
    $funcoesExecutadas++;


    global $numeroMagico;

    if(!$max){
      $max = $numeroMagico;
    }

    $result = [];
    for ($i=$min; $i <= $max; $i++) {
      $result[] = $i;
    }
    return $result;
  }

  // foreach (tabela(2) as $value) {
  //   echo "$value \n";
  // }

 ?>
