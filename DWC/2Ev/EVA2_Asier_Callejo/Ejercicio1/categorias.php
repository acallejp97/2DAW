<?php 
 
    //Lista de artículos.
    $empleados = array(
       array('codigo' => '1', 'descripcion' => 'SmartPhone'),
	   array('codigo' => '2', 'descripcion' => 'SmartWatch'),
	   array('codigo' => '3', 'descripcion' => 'SmartTV'),
	   array('codigo' => '4', 'descripcion' => 'SmartCloth'),
    );
    echo json_encode($empleados);
?>