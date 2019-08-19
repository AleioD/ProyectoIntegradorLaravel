function swapStyleSheet(sheet) {
  document.getElementById("pagestyle").setAttribute("href", sheet);
}

function initate() {
  var style1 = document.getElementById("stylesheet1");
  var style2 = document.getElementById("stylesheet2");
  var style3 = document.getElementById("stylesheet3");

  style1.onclick = function () { swapStyleSheet("/css/style.css") };
  style2.onclick = function () { swapStyleSheet("/css/style2.css"); };
  style3.onclick = function () { swapStyleSheet("/css/style3.css"); };


}

window.onload = initate;
