<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercício complementar</title>
    <style>
      body{
        padding: 20px;
        font-family: sans-serif;
      }
    </style>
  </head>
  <body>
    <h1>FAQ</h1>
        <?php
            $faq = [
                  ["pergunta" => "HTML é uma linguagem de programação?", "resposta" => "Não, é uma linguagem de marcação."],
                  ["pergunta" => "PHP é uma linguagem fortemente tipada?", "resposta" => "Não."],
                  ["pergunta" => "É possivel criar mais de uma branch no mesmo projeto?", "resposta" => "Sim"],
                  ["pergunta" => "Qual é o método padrão no formulário?", "resposta" => "GET"],
                  ["pergunta" => "POST é mais seguro que GET?", "resposta" => "Sim!"]
            ];

            //pega todas as perguntas do array $faq
            foreach ($faq as $item) {

              //pega cada pergunta e resposta
              foreach ($item as $key => $value) {
                echo "$key: $value <br>";
              }

              echo '<br>';
            }

         ?>

         <br><br>

         <?php

              $cor = array(
                          '#ffffff'=> 'Branco',
                          '#008000' =>'Verde',
                          '#ff0000' =>'Vermelho'
                        );

              echo "<ul style='background-color: #ccc;'>";
              foreach ($cor as $key => $value) {
                echo "<li style='color: $key'> $value</li>";
              }
              echo "</ul>";
        ?>
  </body>
</html>
