console.log('game is running');
var downloadTimer;
var audio= document.getElementById("audio");
/*Logica de guardado de puntaje y partida*/

var scoreInput = document.querySelector('#scoreInput');
if (scoreInput != null) {
  setInterval(function () {
    scoreInput.value = sessionStorage.getItem("score");
    console.log(scoreInput.value);
  }, 1000)
}

var formScore = document.querySelector("#formScore");

var volumeS=document.getElementById("buttonS");
if (volumeS != null) {
  volumeS.addEventListener("click", function() {
    volumeB.style.display="flex";
    volumeS.style.display="none";
    sessionStorage.setItem("silence", "silenceFalse");
    alert("Sonido activado");
    location.reload();
    audio.play();
  });
}

var volumeB=document.getElementById("buttonB");
if (volumeB != null) {
  volumeB.addEventListener("click", function() {
    volumeS.style.display="flex";
    volumeB.style.display="none";
    sessionStorage.setItem('silence', "silence");
    audio.muted = true;
    alert("Juego silenciado");
    location.reload();
  });
}

/*
Agregamos funcionalidad a los botones salir del juego y guardar.
Mas adelante guardar debe hacer un update de la base de datos.
*/
if (document.title == 'Categorias') {
var startGame = document.querySelector('#startGame').addEventListener("click", selectCategory);
var quitGame = document.querySelector('#quitGame').addEventListener("click", doQuitGame);
var saveGame = document.querySelector('#saveGame').addEventListener("click", doSaveGame);
document.querySelector('.audio').style.display = 'none';
audio.muted = true;
}




if (document.title == 'Juego') {
  var quitGame = document.querySelector('#quitGame').addEventListener("click", doQuitGame);
  var saveGame = document.querySelector('#saveGame').addEventListener("click", doSaveGame);
  var saveGame = document.querySelector('#saveGame2').addEventListener("click", doSaveGame);
  var continueGame = document.querySelector('#continueGame').addEventListener("click", doContinue);
  /*
  Recuperamos el puntaje guardado y arrancamos el contador.
  */
  showTime();
  recoverScore();
  recoverAudioStatus();
  answersCounter();
  startCounting();
}

function doQuitGame() {
  sessionStorage.removeItem("score");
  sessionStorage.removeItem("counter");
  window.location.pathname = '/index';
}

function doSaveGame() {
  formScore.submit();
  sessionStorage.removeItem("score");
  sessionStorage.removeItem("counter");
}

function doContinue() {
  sessionStorage.removeItem("counter");
}

function selectCategory() {
  var categoriesList = Array.from(document.querySelectorAll('#categoriesList .carousel-item'));
  categoriesList.forEach(checkCategory);
}

function checkCategory(item, index) {
  if (item.classList.contains('active')) {
    document.querySelector('#selectedCategory').value = item.childNodes[1].innerText;
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
    var count = parseInt(sessionStorage.getItem("counter"));
    sessionStorage.setItem("counter",count+1);
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

function answersCounter() {
  if (parseInt(sessionStorage.getItem("counter"))) {
    var count = parseInt(sessionStorage.getItem("counter"));
    if (count == 10) {
      $("#guardarElJuego").modal('show');
    }
  } else {
    sessionStorage.setItem("counter", 0);
  }
}

function recoverAudioStatus() {
  if (sessionStorage.getItem("silence") === "silence") {
    if (volumeB != null) {
      volumeS.style.display="flex";
      volumeB.style.display="none";
      audio.muted = true;
    }
  } else {
    if (volumeS != null) {
        volumeB.style.display="flex";
        volumeS.style.display="none";
        sessionStorage.setItem("silence", "silenceFalse");
        audio.muted = false;
    }
  }
}

function showTime() {
  if (document.title == "Juego") {
    document.querySelector('#timer').style.display = 'flex';
  }
}
