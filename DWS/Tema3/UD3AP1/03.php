<?php
$dia=$_POST["dia"];
$mes=$_POST["mes"];
$anio=$_POST["anio"];
if (checkdate($mes,$dia,$anio)){
    
}
else
echo "alert(\"Inserte una fecha correcta\")";

?>