//Validacion de correo
function validarCorreo(correo) {
  var expReg = /^(([^<>()[].,;:s@"]+(.[^<>()[].,;:s@"]+)*)|(".+"))@(([^<>()[].,;:s@"]+.)+[^<>()[].,;:s@"]{2,})$/;
  if (expReg.test(correo.getElementById("email").value)) return true;
  else {
    alert("Por favor introduzca un correo en formato valido");
    return false;
  }
}

//Validacion Correo Creado
function validarCreacion(correoIntroducido, arrayCorreos) {
  var existe = false;
  arrayCorreos.forEach(function(correo) {
    if (
      correo.toUpperCase() ==
      correoIntroducido.getElementById("email").value.toUpperCase()
    )
      existe = true;
  });
  return existe;
}

//Validacion contraseña
function validarPasswd(passwd) {
  var expReg = /^(?=.*\d)(?=.*[a-záéíóúüñ]).*[A-ZÁÉÍÓÚÜÑ]/;
  if (expReg.test(passwd.getElementById("password").value)) {
    return true;
  } else {
    alert(
      "Por favor introduzca una contraseña que contenga mayuscula, minscula y un numero"
    );
    return false;
  }
}

function validarPasswdIguales(passwd) {
  var passwd1 = passwd.getElementById("password").value;
  var passwd2 = passwd.getElementById("confirmarpassword").value;
  if (passwd1 == passwd2) return true;
  else return false;
}

//todo añadirlo al onclick
function onClickPulsado(usuario) {
  if (
    validarPasswd(usuario.passwd) ||
    validarCorreo(usuario.correo) ||
    validarCreacion(usuario.correo)
  )
    return true;
  else return false;
}

//Creamos el objeto usuario
var usuario = {
  id: "",
  nombre: "",
  passwd: "",
  email: "",
  permisos: ""
};

var usuario = new Object();
usuario.id = "";
usuario.nombre = "";
usuario.passwd = "";
usuario.email = "";
usuario.permisos = "";
usuario.getID = function() {
  return this.id;
};
usuario.getNombre = function() {
  return this.nombre;
};
usuario.getPasswd = function() {
  return this.passwd;
};
usuario.getEmail = function() {
  return this.email;
};
usuario.getPermission = function() {
  return this.permisos;
};

var sentenciaRegistro =
  "INSERT INTO usuarios(id, nombre, password, email, permisos)" +
  "VALUES(?,?,?,?,?);";

var sentenciaInicio =
  "SELECT id, nombre, permisos from usuarios " +
  "where nombre like usuario.nombre and password like usuario.passwd;";

var sentenciaCrearPost =
  "INSERT INTO articulos(fecha, texto, categoria, publicado)" +
  "VALUES(?,?,?,?);";

var sentenciaActualizarPost =
  "UPDATE articulos" +
  "SET titulo=?, texto=?, valoracion=?, categoria=?, publicado=? where id=?;";
