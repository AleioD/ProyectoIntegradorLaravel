console.log('game is running');

var quitGame = document.querySelector('#quitGame').addEventListener("click", doQuitGame);
var saveGame = document.querySelector('#saveGame').addEventListener("click", doSaveGame);

function doQuitGame() {
  window.location.pathname = '/index';
}

function doSaveGame() {
  window.location.pathname = '/ranking';
}

var buttonAnswerArray = [];

buttonAnswerArray = Array.from(document.querySelectorAll('.buttonAnswer'));
console.log(buttonAnswerArray);

buttonAnswerArray.forEach(myFunction);

function myFunction(item, index) {
    var itemId = item.id;
    var itemValue = item.childNodes[1].value;

    document.querySelector('#'+itemId).addEventListener("click", function(){
    console.log(itemValue);
    clearStatusStyles();
     if (itemValue == 'correct') {
       console.log('Is correct!');
       item.childNodes[1].blur();
       item.childNodes[1].classList.add("correct");
      document.querySelector('#resultCorrect').style.display = 'flex';
     } else {
       item.childNodes[1].blur();
       item.childNodes[1].classList.add("incorrect");
       document.querySelector('#resultIncorrect').style.display = 'flex';
     }
    });
}

function clearStatusStyles() {
  document.querySelector('#resultCorrect').style.display = 'none';
  document.querySelector('#resultIncorrect').style.display = 'none';
  buttonAnswerArray.forEach(function (item, index) {
    item.childNodes[1].classList.remove('correct');
    item.childNodes[1].classList.remove('incorrect');
  });
}
