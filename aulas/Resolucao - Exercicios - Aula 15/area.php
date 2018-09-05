<?php

    function triangulo($base, $altura){
        global $funcoesExecutadas;
        $funcoesExecutadas++;

        $area = $base * $altura / 2;
        return $area;
    }

    // triangulo(9,10);

    function retangulo($base, $altura){
        global $funcoesExecutadas;
        $funcoesExecutadas++;

        $area = ($base * $altura);
          return $area;
    }

    // retangulo(4,6);

    function quadrado($lado){
        global $funcoesExecutadas;
        $funcoesExecutadas++;

        $area = ($lado * $lado);
      return $area;
    }
    // quadrado(2);
    
    function circulo($raio){
        global $funcoesExecutadas;
        $funcoesExecutadas++;

        $area = (pi() * ($raio * $raio));
        return $area;
    }

    // circulo(3);





?>