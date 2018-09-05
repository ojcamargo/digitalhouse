<?php

include_once 'incluir.php';


echo "Olá, Mundo";

//C:
//aparentemente não tem diferença entre include e require.
//mas o require diz pro programa que aquele arquivo é obrigatório para continuar rodando.
//se não encontrar o arquivo, ele exibe um erro e para o programa.

include_once 'incluir.php';
include_once 'incluir.php';

//C: inclue 3 vezes o mesmo código

//D: include_once inclue o arquivo somente uma vez


