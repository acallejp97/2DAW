function validarInicio(todo) {
  var usuario = todo.getElementById("usuario").value;
  var passwd = todo.getElementById("password").value;

  if (passwd == "?" && usuario == "?") return true;
  else return false;
}
