<?php

    //criar e editar arquivo
    // $caminhoDoArquivo = "hobbies.txt";

    // $recurso = fopen($caminhoDoArquivo, 'w');
    // fwrite($recurso, "Sleep \n");
    // fwrite($recurso, "Eat \n");
    // fwrite($recurso, "Code \n");

    // fclose($recurso);

    //ler conteudo do arquivo
    // $caminhoDoArquivo = "hobbies.txt";

    // $recurso =  fopen($caminhoDoArquivo, 'r');
    // $tamanhoDoArquivo = filesize($caminhoDoArquivo);
    // $conteudoDoArquivo = fread($recurso, $tamanhoDoArquivo);
    
    // fclose($recurso);

    // echo $conteudoDoArquivo;

    // function pegarConteudo($caminhoDoArquivo){
    //     $recurso =  fopen($caminhoDoArquivo, 'r');
    //     $tamanhoDoArquivo = filesize($caminhoDoArquivo);
    //     $conteudoDoArquivo = fread($recurso, $tamanhoDoArquivo);
    //     fclose($recurso);

    //     return $conteudoDoArquivo;
    // }
    
    // ler conteudo com file_get_contents()
    // $caminhoDoArquivo = "hobbies.txt";
    // $hobbies = file_get_contents($caminhoDoArquivo);
    // echo $hobbies;

    //editar arquivo com file_put_contents() sobrescrevendo
    // $caminhoDoArquivo = "hobbies.txt";

    // $novoConteudo = "Namorar\nBeber\nDormir\nMexer nos compuiter\n";
    
    // file_put_contents($caminhoDoArquivo, $novoConteudo);

    //editar arquivo com file_put_contents() sem sobrescrever
    // $caminhoDoArquivo = "hobbies.txt";
    // $hobbies = file_get_contents($caminhoDoArquivo);
    
    // $hobbies .= "Jogar\nXingar\nChapar\nFazer o Elvis\n";
    
    // file_put_contents($caminhoDoArquivo, $hobbies);

    //imprimir conteudo linha a linha
    // $caminhoDoArquivo = "hobbies.txt";
    // $recurso = fopen($caminhoDoArquivo, 'r');
    
    // if($recurso){
    //     while(($linha = fgets($recurso)) !== false){
    //         echo "Meu hobby favorito é $linha <br>";
    //     }
    // }
    // fclose($recurso);

    //BORA NO JSON :D
    // $meuJson = "categorias.json";
    // $recurso = fopen($meuJson, 'r');
    // $tamanho = filesize($meuJson);
    // $conteudo = fread($recurso, $tamanho);
    // fclose($recurso);

    // echo $conteudo;

    // var_dump($conteudo);
    // $jsonParaArray = json_decode($conteudo, true);
    // var_dump($jsonParaArray);

    // echo "Categorias: <br>";
    
    // $listaCategorias = $jsonParaArray["categorias"];

    // foreach($listaCategorias as $categoria){
    //     echo "$categoria <br>";
    // }



    $meuJson = "usuarios.json";
    $conteudo = file_get_contents($meuJson);
    $jsonParaArray = json_decode($conteudo, true);

    $listaUsuarios = $jsonParaArray["usuarios"];

    // var_dump($listaUsuarios);

    foreach($listaUsuarios as $usuario){
        foreach($usuario as $key => $value){
            echo "$key: $value <br>";
        }
        echo "<hr>";
    }

    
    
    

?>