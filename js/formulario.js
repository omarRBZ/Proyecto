var genero;
var nombre =document.getElementById('nombre');
var apellidoPaterno = document.getElementById("apellidoPaterno");
var apellidoMaterno = document.getElementById("apellidoMaterno");
var nacionalidad =  document.getElementById('nacionalidad');
var nacionalidad = document.getElementById("entidadDeNacimiento");
var estadoCivil =  document.getElementById('estadoCivil');
var gradoDeEstudios =document.getElementById('gradoDeEstudios');
var boton = document.getElementById('enviar');
var hombre = document.getElementById('Hombre');
var mujer =document.getElementById('Mujer');
var enviar = document.getElementById('enviar');
var dependenciaDeDiagnostico;
var identificacion;
var folioDeActa = document.getElementById("folioDeActa");
var claveDeElector=document.getElementById('claveDeElector');

/*$("#dependenciaDeDiagnostico").change(function () {
  dependenciaDeDiagnostico=$("#dependenciaDeDiagnostico option:selected'").text();
  console.log(dependenciaDeDiagnostico);

});*/

function acta() {
  identificacion=document.getElementById('identificacion');
  var opccion=identificacion.options[identificacion.selectedIndex].value;
if (opccion=="Acta de nacimiento") {
claveDeElector.disabled=true;
folioDeActa.disabled=false;

}
else if (opccion=="credencial de elector") {
folioDeActa.disabled=true;
claveDeElector.disabled=false;

}

}

enviar.addEventListener("click", function() {
  validar();



});

function validar() {
  if (nombre.value === "" || apellidoMaterno.value === "" || nacionalidad.value === "") {
    alert("no se an llenado los campos ");

  } else {
    console.log(nombre.value);
    console.log(apellidoMaterno.value);
    console.log(nacionalidad.value);
  }

}

hombre.addEventListener("change", function() {
  if (hombre.checked) {
    mujer.checked = false;
    genero = "hombre";
  } else if (mujer.checked) {
    hombre.checked = false;

    genero = "mujer";

  }
});
mujer.addEventListener("change", function() {
  if (mujer.checked) {
    hombre.checked = false;
    genero = "mujer";

  } else if (hombre.checked) {
    mujer.checked = false;
    genero = "hombre";

  }

});
