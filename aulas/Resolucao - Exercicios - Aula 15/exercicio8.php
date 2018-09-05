<?php

    echo "Olá, Visitante! \n";
    $nome = readline('Digite seu nome: '); //readline é uma função do PHP permitir que o usuario insira dados.

    echo "Boas Vindas, $nome \n"; 

    $idade = readline('Digite sua idade: ');

    if($idade < 18){
        echo "Você não está autorizado no sistema \n";
    }else{
        echo "Autorização aceita \n";
    }

    function hobbyValido($hobby){
        return strlen($hobby < 15 && $hobby > 3);
    }

    $hobbies = readline("Insira hobbies separados por virgula: ");// usuario vai inserir hobbies separados por virgula

    //explode pega uma string, e transforma em array sendo que ele 
    //separa os elementos de acordo com o primeiro parametro que você passar, 
    //nesse caso vamos utilizar virgula!

    $arrayHobbies = explode(',', $hobbies); 

    
    $hobbiesConfirmados = [];
    foreach ($arrayHobbies as $key => $value) {

        $respostaUsuario = readline("Você confirma o hobbie $value? (yes/no)"); //guardando resposta do usuario numa variavel

        if($respostaUsuario === "yes"){
            $hobbiesConfirmados[] = $value;//adicionando o hobbie que o usuario confirmou num array separado para exibir depois
        }
        
    }

    echo "Nome: $nome \n";
    echo "Idade: $idade \n";
    echo "Hobbies: ";
     foreach ($hobbiesConfirmados as $key => $value) {
         echo "$value, ";
     }

