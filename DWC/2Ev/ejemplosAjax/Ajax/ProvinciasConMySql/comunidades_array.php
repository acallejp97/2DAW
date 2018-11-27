
<?php
include ("conexion_2.php");
/*$dbserver = "mysql.hostinger.es";
$dbuser = "u745845519_ajax";
$password = "ajaxajax";
$dbname = "u745845519_ajax";
$con = new mysqli($dbserver, $dbuser, $password,$dbname);*/


if(!$con) {
    echo "No se pudo conectar a la base de datos";
  }


$sql = "SELECT id_com,nom_com FROM comunidades";
$result = $con->query($sql);

$rowdata=array();
$i=0;
		while ($row = $result->fetch_array())
		{
			//echo'<option value="'.$row['nom-com'].'">'.$row['nom-com'].'</option>';
			//echo "sdlkcbsdlckbjed";
			$rowdata[$i][0]=$row[0];
			$rowdata[$i][1]=$row[1];
			$i++;			
		}
echo json_encode($rowdata);

//echo "sdlkcbsdlckbjed";
?>


