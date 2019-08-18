console.log('game is running');

var score = 0;
if (parseInt(sessionStorage.getItem('score'))) {
  puntos = parseInt(sessionStorage.getItem('score'));
  score = score + puntos;
  document.querySelector('#score').innerText = score;
}

/*
Agregamos funcionalidad a los botones salir del juego y guardar.
Mas adelante guardar debe hacer un update de la base de datos.
*/
var quitGame = document.querySelector('#quitGame').addEventListener("click", doQuitGame);
var saveGame = document.querySelector('#saveGame').addEventListener("click", doSaveGame);

function doQuitGame() {
  window.location.pathname = '/index';
}

function doSaveGame() {
  window.location.pathname = '/ranking';
}

/*
Capturamos en un array los botones de respuesta para agregarles funcionalidad de juego.
*/
buttonAnswerArray = Array.from(document.querySelectorAll('.buttonAnswer'));
buttonAnswerArray.forEach(checkAnswer);

function checkAnswer(item, index) {
  var itemId = item.id;
  var itemValue = item.childNodes[1].value;
  /*
  Recorremos el array de botones de respuesta y agregamos un listener a cada uno.
  */
  document.querySelector('#'+itemId).addEventListener("click", function(){
    clearStatusStyles();
    if (itemValue == 1) {
      console.log('Is correct!');
      disableButtons()
      item.childNodes[1].blur();
      item.childNodes[1].classList.add("correct");
      document.querySelector('#resultCorrect').style.display = 'flex';
      puntos = parseInt(sessionStorage.getItem('score'));
      score = puntos + 10;
      document.querySelector('#score').innerText = score;
      sessionStorage.setItem('score', score);
    } else {
      disableButtons()
      item.childNodes[1].blur();
      item.childNodes[1].classList.add("incorrect");
      document.querySelector('#resultIncorrect').style.display = 'flex';
    }
    setTimeout(function(){ location.reload(); }, 2000);
  });
}

/*
Se dehabilitan los botones
*/
function disableButtons() {
  buttonAnswerArray.forEach(function (item, index) {
    item.childNodes[1].setAttribute("disabled", true);
  });
}


/*
Se limpian los estilos previamente cargados.
*/
function clearStatusStyles() {
  document.querySelector('#resultCorrect').style.display = 'none';
  document.querySelector('#resultIncorrect').style.display = 'none';
  buttonAnswerArray.forEach(function (item, index) {
    item.childNodes[1].classList.remove('correct');
    item.childNodes[1].classList.remove('incorrect');
  });
}
