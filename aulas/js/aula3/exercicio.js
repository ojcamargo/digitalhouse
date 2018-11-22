console.log('este é um arquivo externo');

window.onload = function() {
  /*
  let nome = window.prompt('Digite seu nome');
  if(nome) {
    if(window.confirm(nome + ', você é maior de 18 anos?')) {
      alert('Bem vindo ' + nome + '. Você será redirecionado para o site.');
      location.href = 'http://www.google.com.br';
    }
  }

  let buttonBack = document.getElementById('back');
  let buttonNext = document.getElementById('next');


  buttonBack.onclick = function() {
    history.back();
  }

  buttonNext.onclick = function() {
    history.forward();
  }
  */

  numeros();
}



function numeros() {
  let num1 = prompt('Digite o primeiro número');
  let num2 = prompt('Digite o segundo número');
  if(confirm('Seus números são: ' + num1 + ' e ' + num2 + '. Deseja continuar?')) {
    alert((num1 > num2 ? num1 : num2) + ' é maior.');
  } else {
    numeros();
  }
}
