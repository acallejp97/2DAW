<!DOCTYPE html>

<html lang="">
<?php
define('RAIZ_APLICACION', dirname(__FILE__));

include RAIZ_APLICACION . "/../php/Controlador/UsuarioControler.php";

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="title" content="G1Blog">
    <title>G1Blog</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <section>
        <form action="../php/Controlador/UsuarioControler.php" method="POST">
            Nombre de usuario : <input type="text" id="usuario" />
            <br><br>
            E-mail : <input type="email" id="email" />
            <br><br>
            Contraseña : <input type="password" id="password" />
            <br><br>
            Repetir contraseña : <input type="password" id="confirmarpassword" />
            <br><br>
            <input type="submit" value="Crear usuario" onclick="onClickPulsado()" name="Crear usuario">
        </form>
    </section>
    <script>

        //Validacion de correo
        function validarCorreo() {
            var expReg = /^(([^<>()[].,;:s@"]+(.[^<>()[].,;:s@"]+)*)|(".+"))@(([^<>()[].,;:s@"]+.)+[^<>()[].,;:s@"]{2,})$/;
            if (expReg.test(document.getElementById("email").value)) return true;
            else {
                alert("Por favor introduzca un correo en formato valido");
                return false;
            }
        }

        //Validacion Correo Creado
        function validarCreacion(arrayCorreos, correoIntroducido) {
            var existe = false;
            arrayCorreos.forEach(function (correo) {
                if (
                    correo.toUpperCase() ==
                    correoIntroducido.value.toUpperCase()
                )
                    existe = true;
            });
            return existe;
        }

        //Validacion contraseña
        function validarPasswd(password) {
            var expReg = /^(?=.*\d)(?=.*[a-záéíóúüñ]).*[A-ZÁÉÍÓÚÜÑ]/;
            if (expReg.test(password)) {
                return true;
            } else {
                alert("Por favor introduzca una contraseña que contenga mayuscula, minscula y un numero");
                return false;
            }
        }

        function validarPasswdIguales(passwd1, passwd2) {
            if (passwd1 == passwd2){
                return true;
            }
            else{
                alert("Las contraseñas no coinciden, por favor, reviselas")
                return false;
            }

        }

        //todo añadirlo al onclick
        function onClickPulsado() {
            var usuario = document.getElementById('usuario').value;
            var correo = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmarpassword= document.getElementById('confirmarpassword').value;

            if (validarCorreo(correo) ||
                validarPasswd(password) ||
                //validarCreacion(correo) ||
                validarPasswdIguales(password, confirmarpassword)){
localStorage.setItem('usuario',usuario);                
localStorage.setItem('correo',correo);                
localStorage.setItem('password',password);                
localStorage.setItem('permission',0);                
                }else{
                    alert("Por favor, revise los campos");
                }
        }

    </script>

    <footer>
        <a href="index1.php">Volver al inicio</a>
    </footer>
</body>

</html>