// Evento se ejecuta cunado todos los elementos estan listos
window.addEventListener('load',function(){
	// Capturamos los Elemntos nescesarios

	var stylesheet = document.getElementById("pagestyle");
	var btns = document.querySelectorAll(".btn-theme");

	var themes = Array.from(btns).map(function(item){return item.getAttribute('data-theme')});
	// Creamos la variable para manejar el storage
	var	storage = window.localStorage;

	// Creamos la variable que va a definir el theme
	var theme = "/css/style.css";

// recorremos el Array de botones para asignarle el metodo click
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener('click',function(){
			if(storage.getItem("theme-store")){
						storage.removeItem("theme-store");
						storage.setItem("theme-store", this.getAttribute('data-theme'));
						theme = storage.getItem("theme-store");
						location.reload();

				}
			else{
				storage.setItem("theme-store", this.getAttribute('data-theme'));
						theme = storage.getItem("theme-store");
				location.reload();

			}
			;

		});
}

// verificamos si ya exite un tema guardado
		if(storage.getItem("theme-store")){
				 // Si exite
						theme = storage.getItem("theme-store");
					stylesheet.setAttribute("href", theme)
		}
	else{
		storage.setItem("theme-store", theme);
				stylesheet.setAttribute("href", theme)
	}



});
