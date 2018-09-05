<?php
  $titulo = "Formulário PHP";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Aula 17 - PHP</title>
    <style>
      body{
        padding: 20px;
        font-family: sans-serif;
      }
    </style>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>
    <div id='fg_membersite'>
      <?php
        if($_GET['erro']){
          echo "<p style='color: red;'> PREENCHA CORRETAMENTE OS CAMPOS!</p>";
        }

       ?>
        <form id='register' action='confirmacao.php' method='get'>
            <fieldset>
                <legend>Inscreva-se</legend>

                <div class='container'>
                    <label for='name' >Nome completo: </label><br/>
                    <input required type='text' name='name' id='name' /><br/>
                </div>
                <div class='container'>
                    <label for='email' >E-mail:</label><br/>
                    <input type='email' required name='email' id='email' placeholder='email@email.com' /><br/>
                </div>
                <div class='container'>
                    <label for='idade' >Idade*:</label><br/>
                    <input required type='number' name='idade' id='idade' /><br/>
                </div>
                <div class='container'>
                    <label for='senha' >senha*:</label><br/>
                    <input required type='password' name='senha' id='senha' /><br/>
                </div>
                <div class='container'>
                    <label for='confirma-senha' >confirmar senha*:</label><br/>
                    <input required type='password' name='confirma-senha' id='confirma-senha' /><br/>
                </div>
                <div class="container">
                  <label>Hobbies</label> <br>
                  <label for="hobbies_leitura">
                    <input type="checkbox" name="hobbies[]" id="hobbies_leitura" value="Leitura">
                    Leitura
                  </label><br>
                  <label for="hobbies_corrida">
                    <input type="checkbox" name="hobbies[]" id="hobbies_corrida" value="Corrida">
                    Corrida
                  </label><br>
                  <label for="hobbies_comer">
                    <input type="checkbox" name="hobbies[]" id="hobbies_comer" value="comer">
                    comer
                  </label><br>
                  <label for="hobbies_dormir">
                    <input type="checkbox" name="hobbies[]" id="hobbies_dormir" value="dormir">
                    dormir
                  </label><br>
                </div>
                <div class="container">
                  <label for="">País</label> <br>
                  <select name="pais" required>
                    <option selected disable>Selecione um país</option>
                    <option value="Afeganistão">Afeganistão</option>
                    <option value="África do Sul">África do Sul</option>
                    <option value="Albânia">Albânia</option>
                    <option value="Austrália">Austrália</option>
                    <option value="Bélgica">Bélgica</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Canadá">Canadá</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="França">França</option>
                    <option value="Irlanda">Irlanda</option>
                  </select>
                </div>

                <br>
                <div class='container'>
                  <button type="submit" name="button">Enviar</button>
                </div>

                <small>* campos obrigatórios</small>
            </fieldset>
        </form>

    </body>
</html>
