console.log('game is running');
var downloadTimer;

/*
Agregamos funcionalidad a los botones salir del juego y guardar.
Mas adelante guardar debe hacer un update de la base de datos.
*/
if (document.title == 'Categorias') {
var startGame = document.querySelector('#startGame').addEventListener("click", selectCategory);
var quitGame = document.querySelector('#quitGame').addEventListener("click", doQuitGame);
var saveGame = document.querySelector('#saveGame').addEventListener("click", doSaveGame);
}

if (document.title == 'Juego') {
  var quitGame = document.querySelector('#quitGame').addEventListener("click", doQuitGame);
  var saveGame = document.querySelector('#saveGame').addEventListener("click", doSaveGame);
  /*
  Recuperamos el puntaje guardado y arrancamos el contador.
  */
  showTime();
  recoverScore();
  startCounting();
}


function doQuitGame() {
  sessionStorage.removeItem("score")
  window.location.pathname = '/index';
}

function doSaveGame() {
  window.location.pathname = '/ranking';
}

function selectCategory() {
  var categoriesList = Array.from(document.querySelectorAll('#categoriesList .carousel-item'));
  categoriesList.forEach(checkCategory);
}

function checkCategory(item, index) {
  if (item.classList.contains('active')) {
    alert(item.childNodes[1].innerText);
  }
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
    stopCounting();
    clearStatusStyles();
    if (itemValue == 1) {
      console.log('Is correct!');
      disableButtons()
      item.childNodes[1].blur();
      item.childNodes[1].classList.add("correct");
      document.querySelector('#resultCorrect').style.display = 'flex';
      var score = parseInt(sessionStorage.getItem("score"));
      sessionStorage.setItem("score",score+10);
      var score = parseInt(sessionStorage.getItem("score"));
      console.log(score)
      document.querySelector('#score').innerText = score + ' pts.';
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

/*
Seteamos el contador para las preguntas
*/

function startCounting() {
  var timeleft = 1;
  downloadTimer = setInterval(function(){
    document.getElementById("timer").innerText ="Tiempo: " + (25 - timeleft)+"s";
    timeleft += 1;
    if(timeleft >= 26){
      clearInterval(downloadTimer);
      disableButtons()
      document.querySelector('#resultIncorrect').style.display = 'flex';
      setTimeout(function(){ location.reload(); }, 2000);
    }
  }, 1000);
}

function stopCounting() {
  clearInterval(downloadTimer);
}

function recoverScore() {
  if (parseInt(sessionStorage.getItem("score"))) {
    var score = parseInt(sessionStorage.getItem("score"));
    document.querySelector('#score').innerText = score + ' pts.';
  } else {
    sessionStorage.setItem("score", 0);
    document.querySelector('#score').innerText = 0 + ' pts.';
  }
}

function showTime() {
  if (document.title == "Juego") {
    document.querySelector('#timer').style.display = 'flex';
  }
}
