<?php
    $funcoesExecutadas = 0;
    include 'funcoes.php';
    include 'area.php';

    function maiorCirculo($a, $b, $c){
        $areaA = circulo($a);
        $areaB = circulo($b);
        $areaC = circulo($c);

        return maior($areaA, $areaB, $areaC);
    }


    maiorCirculo(15, 13, 10);

    echo $funcoesExecutadas;

    
    $frase = "Adoro php, Eu também adoro php!";
    $find = "php";
    $array = strpos($frase, $find);
    echo $array;
    