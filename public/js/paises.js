// Traemos todos los campos del formulario
var campoUser = document.querySelector("input[name=userName]");
var campoName = document.querySelector("input[name=name]");
var campoSurname = document.querySelector("input[name=surname]");
var campoEmail = document.querySelector("input[name=email]");
var campoPaises = document.querySelector("select[name=country]");
var campoProvincias = document.querySelector("select[name=state]");


//Traemos el formulario
var elFormulario = document.querySelector("#formulario");
//El div de las Provincias, que aparece oculto
var divProvincias = document.querySelector("#provincias");

//Api de los paises
fetch("https://restcountries.eu/rest/v2/all")
.then(function(response){
  return response.json();
})
.then(function (paises){
  for (var pais of paises){
    var option = document.createElement("option");
    option.value = pais.alpha2Code;
    var optionText = document.createTextNode(pais.name);
    option.append(optionText);
    campoPaises.append(option);
  }
})
.catch(function (error){
  console.log(error);
});

campoPaises.addEventListener("change", function() {
  if(campoPaises.value == "AR")
  {
    divProvincias.style.display = "block";
  }
  else
  {
    divProvincias.style.display = "none";
    campoProvincias.value = "";
  }
});


fetch("https://dev.digitalhouse.com/api/getProvincias")
.then(function (response){
  return response.json();
})
.then(function (provincias){
  provincias = provincias.data;
     for (var provincia of provincias){
       var option = document.createElement("option");
       option.value = provincia.state;
       var optionText = document.createTextNode(provincia.state);
       option.append(optionText);
       campoProvincias.append(option);
}
})
.catch(function (error){
  console.log(error);
})



// Agarramos el formulario y eliminamos el boton de enviar
var losCampos = Array.from(elFormulario.elements);

losCampos.pop();
var regexEmail = /\S+@\S+\.\S+/;

var errores = {};

//Aclaramos cual es el Div del error en cada caso
losCampos.forEach(function (unCampo) {

  //console.log(unCampo.name + "tiene el valor: " + unCampo.value);
  var divError = null;
  if (unCampo.type !== "file") {
    divError = unCampo.nextElementSibling;
  } else {
    divError = unCampo.parentElement.nextElementSibling;
  }

  //Validamos cuando el usuario sale del input
  unCampo.addEventListener("blur", function () {
    var valorDelCampo = unCampo.value.trim();
    // si el campo está vacío

    if (valorDelCampo === "") {
      this.classList.add("is-invalid");
      divError.style.display = "block";
      divError.innerText = `Este campo es obligatorio`;
      errores[this.name] = true;
    } else {
      this.classList.remove("is-invalid");
      divError.style.display = "none";
      divError.innerText = "";
      delete errores[this.name];




      // si el password tiene menos de 5 caracteres o si le faltan las letras "DH"
      if (this.name === "password") {
        if (valorDelCampo.length < 5) {
          this.classList.add("is-invalid");
          divError.style.display = "block";
          divError.innerText = "La contraseña debe tener al menos 5 caracteres"
          errores[this.name] = true;

        } else if (valorDelCampo.indexOf("DH") < 0) {
          this.classList.add("is-invalid");
          divError.style.display = "block";
          divError.innerText = "La contraseña debe incluir las letras 'DH'";
          errores[this.name] = true;
        } else if (valorDelCampo.indexOf(" ") > 0){
          this.classList.add("is-invalid");
          divError.style.display = "block";
          divError.innerText = "La contraseña no puede tener espacios en blanco";
          errores[this.name] = true;
        }




        else {
          this.classList.remove("is-invalid");
          divError.style.display = "none";
          divError.innerText = "";
        }
      }

      // Nos aseguramos de que tenga un formato de email válido
      if (this.name === "email") {
        if (!regexEmail.test(valorDelCampo)) {
          this.classList.add("is-invalid");
          divError.style.display = "block";
          divError.innerText = "Ingresá un email válido"


          errores[this.name] = true;
        } else {
          this.classList.remove("is-invalid");
          divError.style.display = "none";
          divError.innerText = "";
        }
      }
    }

    console.log(errores);
  });

  //Validamos la extension de la foto
  if (unCampo.name === "avatar") {
    unCampo.addEventListener("change", function () {
      var nombreArchivo = this.value.split("\\").pop();
      this.nextElementSibling.innerText = nombreArchivo

      var extensionArchivo = this.value.split(".").pop();


      var extensionesAceptadas = ["jpg", "jpeg", "png"];

      var extensionEncontrada = extensionesAceptadas.find(function (ext) {
        return ext === extensionArchivo;
      });


      if (extensionEncontrada === undefined) {
        this.classList.add("is-invalid");
        divError.style.display = "block";
        divError.innerText = "Formato inválido. Los formatos soportados son jpg, jpeg y png";

        errores[this.name] = true;
      } else {
        this.classList.remove("is-invalid");
        divError.style.display = "none";
        divError.innerText = "";

        delete errores[this.name];
      }
    })
  }
});


// Valido cuando se envíe el formulario //
elFormulario.addEventListener("submit", function (event) {
  losCampos.forEach(function (unCampo) {
    var valorFinalDelCampo = unCampo.value.trim();

    if (valorFinalDelCampo === "") {
      errores[unCampo.name] = true;
    }
  });

  // Evitamos que se envíe el formulario si contiene errores
  if (Object.keys(errores).length > 0) {
    alert("Campos vacíos");
    console.log(errores);
    event.preventDefault();
  }
})
