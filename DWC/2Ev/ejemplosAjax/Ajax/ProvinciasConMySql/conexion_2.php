<?

$dbserver = "mysql.hostinger.es";
$dbuser = "u745845519_ajax";
$password = "ajaxajax";
$dbname = "u745845519_ajax";


$con = new mysqli($dbserver, $dbuser, $password,$dbname);
if(!$con) {
    echo "No se pudo conectar a la base de datos";
  }

?>
