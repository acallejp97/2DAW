//Funcion que detecta si el texto introducido es correcto
function validacionTexto(texto) {
  texto = texto.getElementById("").value;
  if (texto == "") {
    alert("El " + texto.name + " no puede estar vacio");
    return false;
  } else return true;
}
