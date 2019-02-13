<?php 
    //Guarda el codigo que llego vía ajax. en una varibale.
    $cod = $_GET['cod'];
    //Lista de articulos.
    $articulos = array(
       array('codigo' => '1', 'marca' => 'Xiaomi', 'modelo' => 'Mi 5', 'precio' => '285'),
       array('codigo' => '1', 'marca' => 'Xiaomi', 'modelo' => 'Mi 6', 'precio' => '325'),
       array('codigo' => '1', 'marca' => 'Apple', 'modelo' => 'Iphone 6', 'precio' => '325'),
       array('codigo' => '2', 'marca' => 'Apple', 'modelo' => 'Serie 3', 'precio' => '85'), 
       array('codigo' => '2', 'marca' => 'Samsung', 'modelo' => 'Gear S3', 'precio' => '341'), 
       array('codigo' => '3', 'marca' => 'LG', 'modelo' => '24MT49S', 'precio' => '185'), 
       array('codigo' => '3', 'marca' => 'Philips', 'modelo' => '43PFT53', 'precio' => '424'), 
       array('codigo' => '4', 'marca' => 'Schatzii', 'modelo' => 'Serie 1', 'precio' => '8'), 
       array('codigo' => '4', 'marca' => 'Diaper', 'modelo' => 'Cover 3', 'precio' => '22'),
    );
    //Variable que guardará los datos del articulo a buscar. Por defecto guardará null.
    $articulo = array();
    foreach($articulos as $item){
       //Verifica si el codigo es uno de los que está en la lista.
       if($item['codigo'] == $cod){
       //Guarda los datos del empleado que fue encontrado y finaliza el ciclo del foreach.
          $articulo[] = $item;
       }
    }
    //Devuelve la respuesta de si lo encontró o no
    //Lo encontró así que devuelve los datos del articulo
    echo json_encode($articulo) ;
?>