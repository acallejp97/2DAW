<?php
	include("conexion_2.php");
	
	$id_com=$_GET[id_com];
	
if(!$con) {
    echo "No se pudo conectar a la base de datos";
  }


$sql = "SELECT * FROM provincias WHERE id_com=$id_com";
$result = $con->query($sql);

$rowdata=array();
$i=0;
		while ($row = $result->fetch_array())
		{
			//echo'<option value="'.$row['nom-com'].'">'.$row['nom-com'].'</option>';
			//echo "sdlkcbsdlckbjed";
			$rowdata[$i]=$row;
			$i++;			
		}
echo json_encode($rowdata);
?>